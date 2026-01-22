<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('status', 'published')
            ->latest()
            ->paginate(12);

        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $news = News::where('status', 'published')
            ->findOrFail($id);

        // Related: ambil 3 berita terbaru selain berita ini (tanpa kategori)
        $relatedNews = News::where('status', 'published')
            ->where('id', '!=', $news->id)
            ->latest()
            ->take(3)
            ->get();

        $news->increment('views');

        return view('news.show', compact('news', 'relatedNews'));
    }
}
