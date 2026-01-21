<?php

use Illuminate\Support\Facades\Route;
use App\Models\Banner;
use App\Models\News;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\NewsController;

// ============================================
// PUBLIC ROUTES (Tidak perlu login)
// ============================================

// Route home - Tambahkan $news
Route::get('/', function () {
    $banners = Banner::active()->ordered()->get();  
    $news = News::where('status', 'published')
                ->latest()
                ->take(6)
                ->get();
    return view('home', compact('banners', 'news'));
})->name('home');

// Route untuk frontend berita (PUBLIK - pindahkan ke sini)
Route::get('/berita', [NewsController::class, 'index'])->name('news.index');
Route::get('/berita/{id}', [NewsController::class, 'show'])->name('news.show');


//MENU PROFIL
// Sejarah
Route::view('/sejarah', 'sejarah')->name('sejarah');
// Visi & Misi
Route::view('/visimisi', 'visimisi')->name('visimisi');
// Struktur Organisasi
Route::view('/struktur', 'struktur')->name('struktur');

// ============================================
// GUEST ROUTES (Belum login)
// ============================================

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// ============================================
// ADMIN ROUTES (Harus login + admin)
// ============================================

Route::middleware(['auth', 'admin'])->group(function () {
    
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Admin Panel Routes
    Route::prefix('admin')->name('admin.')->group(function () {
        
        // Banner Management
        Route::resource('banners', BannerController::class);
        Route::post('banners/{banner}/toggle', [BannerController::class, 'toggleStatus'])
            ->name('banners.toggle');
        
        // News Management
        Route::resource('news', AdminNewsController::class);
    });

    // Test route
    Route::get('/test', function () {
        return 'Routes working!';
    });
});