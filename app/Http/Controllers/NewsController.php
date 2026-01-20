<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Halaman daftar semua berita
     */
    public function index()
    {
        $news = News::where('status', 'published')
                    ->latest()
                    ->paginate(12);
        
        return view('news.index', compact('news'));
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