<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\News;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('partials.section-berita', function ($view) {
            $latest_news = News::published()
                ->latest()
                ->take(6)
                ->get();

            $view->with('latest_news', $latest_news);
        });
    }
}
