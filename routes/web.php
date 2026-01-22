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

//banner
Route::get('/banner/{id}', [BannerController::class, 'show'])->name('banner.show');

Route::prefix('admin')->name('admin.')->middleware(['admin'])->group(function () {
    Route::get('/banners', [AdminBannerController::class, 'index'])->name('banners.index');
    Route::get('/banners/create', [AdminBannerController::class, 'create'])->name('banners.create');
    Route::post('/banners', [AdminBannerController::class, 'store'])->name('banners.store');
    Route::get('/banners/{banner}/edit', [AdminBannerController::class, 'edit'])->name('banners.edit');
    Route::put('/banners/{banner}', [AdminBannerController::class, 'update'])->name('banners.update');
    Route::delete('/banners/{banner}', [AdminBannerController::class, 'destroy'])->name('banners.destroy');
    Route::patch('/banners/{banner}/toggle', [AdminBannerController::class, 'toggle'])->name('banners.toggle');
});




//MENU PROFIL
// Sejarah
Route::view('/sejarah', 'sejarah')->name('sejarah');
// Visi & Misi
Route::view('/visimisi', 'visimisi')->name('visimisi');
// Struktur Organisasi
Route::view('/struktur', 'struktur')->name('struktur');



//PELAYANAN
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
        
Route::resource('banners', AdminBannerController::class);
Route::patch('banners/{banner}/toggle', [AdminBannerController::class, 'toggle'])
    ->name('banners.toggle');

        
        // News Management
        Route::resource('news', AdminNewsController::class);
    });

    // Test route
    Route::get('/test', function () {
        return 'Routes working!';
    });
});