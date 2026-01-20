<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::with('category')
                   ->latest()
                   ->paginate(10);
        
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'nullable|exists:news_categories,id',
            'status' => 'required|in:draft,published,archived',
            'published_at' => 'nullable|date',
        ]);

        // Generate slug
        $slug = Str::slug($validated['title']);
        $originalSlug = $slug;
        $count = 1;
        
        while (News::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }
        
        $validated['slug'] = $slug;

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('news', 'public');
        }

        // Set published_at if status is published and date not set
        if ($validated['status'] === 'published' && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        $news = News::create($validated);

        // Log activity
        if (class_exists('\App\Helpers\ActivityLogger')) {
            \App\Helpers\ActivityLogger::created('berita', $news->title);
        }

        return redirect()->route('admin.news.index')
                        ->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('admin.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        $categories = Category::all();
        return view('admin.news.edit', compact('news', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'nullable|exists:news_categories,id',
            'status' => 'required|in:draft,published,archived',
            'published_at' => 'nullable|date',
        ]);

        // Update slug jika title berubah
        if ($validated['title'] !== $news->title) {
            $slug = Str::slug($validated['title']);
            $originalSlug = $slug;
            $count = 1;
            
            while (News::where('slug', $slug)->where('id', '!=', $news->id)->exists()) {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }
            
            $validated['slug'] = $slug;
        }

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            
            $validated['image'] = $request->file('image')->store('news', 'public');
        }

        // Set published_at if status changed to published
        if ($validated['status'] === 'published' && $news->status !== 'published' && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        $news->update($validated);

        // Log activity
        if (class_exists('\App\Helpers\ActivityLogger')) {
            \App\Helpers\ActivityLogger::updated('berita', $news->title);
        }

        return redirect()->route('admin.news.index')
                        ->with('success', 'Berita berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $title = $news->title;
        
        // Delete image if exists
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }

        $news->delete();

        // Log activity
        if (class_exists('\App\Helpers\ActivityLogger')) {
            \App\Helpers\ActivityLogger::deleted('berita', $title);
        }

        return redirect()->route('admin.news.index')
                        ->with('success', 'Berita berhasil dihapus!');
    }

    /**
     * Bulk delete news
     */
    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids', []);
        
        if (empty($ids)) {
            return back()->with('error', 'Tidak ada berita yang dipilih!');
        }

        $news = News::whereIn('id', $ids)->get();
        
        foreach ($news as $item) {
            if ($item->image) {
                Storage::disk('public')->delete($item->image);
            }
            $item->delete();
        }

        return back()->with('success', count($ids) . ' berita berhasil dihapus!');
    }
}