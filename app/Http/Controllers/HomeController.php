<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Banner;

class HomeController extends Controller
{
   public function index()
{
    $news = News::published()
        ->latest()
        ->take(6)
        ->get();

    $banners = News::published()
        ->latest()
        ->take(5)
        ->get()
        ->map(function ($n) {
            return (object) [
                'title'       => $n->title,
                'description' => $n->excerpt ?? '',
                'image'       => $n->image,
                'link'        => route('news.show', $n->id),
            ];
        });

    $staticBanners = Banner::where('is_active', true)
        ->orderBy('order')
        ->get();

    return view('home', compact('news', 'banners', 'staticBanners'));
}
