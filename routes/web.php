<?php

use Illuminate\Support\Facades\Route;
use App\Models\Banner;
use App\Models\News;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\BannerController as AdminBannerController;

// ============================================
// PUBLIC ROUTES (Tidak perlu login)
// ============================================

// Route home
Route::get('/', function () {
    $banners = Banner::active()->ordered()->get();  
    $news = News::where('status', 'published')
                ->latest()
                ->take(6)
                ->get();
    return view('home', compact('banners', 'news'));
})->name('home');

// Route untuk frontend berita (PUBLIK)
Route::get('/berita', [NewsController::class, 'index'])->name('news.index');
Route::get('/berita/{id}', [NewsController::class, 'show'])->name('news.show');

// Route untuk frontend banner
Route::get('/banner/{id}', [BannerController::class, 'show'])->name('banner.show');

// MENU PROFIL
Route::view('/sejarah', 'sejarah')->name('sejarah');
Route::view('/visimisi', 'visimisi')->name('visimisi');
Route::view('/struktur', 'struktur')->name('struktur');

// PELAYANAN
Route::view('/pelayanan1', 'pelayanan1')->name('pelayanan1');

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
        Route::resource('banners', AdminBannerController::class);
        Route::patch('banners/{banner}/toggle', [AdminBannerController::class, 'toggle'])
            ->name('banners.toggle');

        // News Management
        Route::resource('news', AdminNewsController::class);
        Route::patch('news/{news}/toggle', [AdminNewsController::class, 'toggle'])
            ->name('news.toggle');
    });

    // Test route
    Route::get('/test', function () {
        return 'Routes working!';
    });
});