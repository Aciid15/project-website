<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Halaman daftar semua berita
     */
    public function index(Request $request)
    {
        $query = News::where('status', 'published');
        
        // Filter berdasarkan kategori jika ada
        if ($request->has('category') && $request->category != '') {
            $query->where('category', $request->category);
        }
        
        $news = $query->latest()->paginate(12);
        
        // Ambil daftar kategori unik untuk dropdown (opsional)
        // Sesuaikan dengan struktur database Anda
        $categories = News::where('status', 'published')
                         ->select('category')
                         ->distinct()
                         ->get()
                         ->map(function($item) {
                             return (object)[
                                 'id' => $item->category,
                                 'name' => $item->category
                             ];
                         });
        
        return view('news.index', compact('news', 'categories'));
    }

    /**
     * Halaman detail berita
     */
    public function show($id)
    {
        $news = News::where('status', 'published')
                    ->findOrFail($id);
        
        // Ambil berita terkait (kategori sama, exclude berita ini)
        $relatedNews = News::where('status', 'published')
                          ->where('category', $news->category)
                          ->where('id', '!=', $id)
                          ->latest()
                          ->take(3)
                          ->get();
        
        return view('news.show', compact('news', 'relatedNews'));
    }
}