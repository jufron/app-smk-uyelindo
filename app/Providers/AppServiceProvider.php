<?php

namespace App\Providers;

use App\Services\Berita\BeritaService;
use App\Services\Berita\BeritaServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public $singletons = [
        BeritaServiceInterface::class => BeritaService::class
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
