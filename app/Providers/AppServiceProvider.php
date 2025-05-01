<?php

namespace App\Providers;

use App\Services\Berita\BeritaService;
use App\Services\Berita\BeritaServiceInterface;
use App\Services\Dashboard\DashboardService;
use App\Services\Dashboard\DashboardServiceInterface;
use App\Services\Testimoni\TestimoniService;
use App\Services\Testimoni\TestimoniServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public $singletons = [
        DashboardServiceInterface::class => DashboardService::class,
        BeritaServiceInterface::class => BeritaService::class,
        TestimoniServiceInterface::class => TestimoniService::class,
    ];

    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
