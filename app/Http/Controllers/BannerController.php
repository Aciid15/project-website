<?php

namespace App\Http\Controllers;

use App\Models\Banner;

class BannerController extends Controller
{
    public function show($id)
    {
        // kalau mau hanya yg aktif:
        $banner = Banner::where('is_active', true)->findOrFail($id);

        return view('banners.show', compact('banner'));
    }
}
