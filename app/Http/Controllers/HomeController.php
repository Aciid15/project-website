<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil berita terbaru yang published, batasi 6 item
        $news = News::where('status', 'published')
                    ->latest()
                    ->take(6)
                    ->get();
        
        // Ambil banner aktif jika ada
        $banners = Banner::where('is_active', true)
                        ->orderBy('order')
                        ->get();
        
        return view('home', compact('news', 'banners'));
    }
}