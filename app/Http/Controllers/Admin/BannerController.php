<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
{
    $banners = Banner::ordered()->get();
    // Ganti dari 'admin.banners.index' ke path absolut
    return view('admin/banners/index', compact('banners'));
}

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'link' => 'nullable|url',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'order' => 'required|integer',
        // 'is_active' => 'nullable|boolean',
    ]);

    // Upload gambar
    if ($request->hasFile('image')) {
        $validated['image'] = $request->file('image')->store('banners', 'public');
    }

    // Handle checkbox is_active
    $validated['is_active'] = $request->has('is_active') ? 1 : 0;

    Banner::create($validated);

    return redirect()
        ->route('admin.banners.index')
        ->with('success', 'Banner berhasil ditambahkan!');
}


    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'order' => 'required|integer|min:1',
            'is_active' => 'boolean',
        ]);

        // Handle upload gambar baru jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($banner->image && Storage::disk('public')->exists($banner->image)) {
                Storage::disk('public')->delete($banner->image);
            }
            
            // Upload gambar baru
            $validated['image'] = $request->file('image')->store('banners', 'public');
        }

        $validated['is_active'] = $request->has('is_active') ? 1 : 0;

        $banner->update($validated);

        return redirect()
            ->route('admin.banners.index')
            ->with('success', 'Banner berhasil diperbarui!');
    }

    public function destroy(Banner $banner)
        {
            $deletedOrder = (int) $banner->order;
            // Hapus gambar dari storage
            if ($banner->image && Storage::disk('public')->exists($banner->image)) {
                Storage::disk('public')->delete($banner->image);
            }

            $banner->delete();

            // Perbarui order banner yang berada dibawahnya
            Banner::where('order', '>', $deletedOrder)
            ->decrement('order');

            return redirect()
                ->route('admin.banners.index')
                ->with('success', 'Banner berhasil dihapus!');
        }

public function toggle(Banner $banner)
{
    $banner->is_active = !$banner->is_active;
    $banner->save();

    return redirect()->route('admin.banners.index')
        ->with('success', 'Status banner berhasil diubah!');
}

    public function toggleStatus(Banner $banner)
    {
        $banner->update(['is_active' => !$banner->is_active]);
        
        return redirect()->route('admin.banners.index')
            ->with('success', 'Status banner berhasil diubah!');
    }
}