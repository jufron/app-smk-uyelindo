<?php

namespace App\Providers;

use App\Services\Pages\PagesService;
use App\Services\Berita\BeritaService;
use App\Services\Galeri\GaleriService;
use Illuminate\Support\ServiceProvider;
use App\Services\Dashboard\DashboardService;
use App\Services\Testimoni\TestimoniService;
use App\Services\Pages\PagesServiceInterface;
use App\Services\Berita\BeritaServiceInterface;
use App\Services\Galeri\GaleriServiceInterface;
use App\Services\GuruDanStaf\GuruDanStafService;
use App\Services\Dashboard\DashboardServiceInterface;
use App\Services\Testimoni\TestimoniServiceInterface;
use App\Services\GuruDanStaf\GuruDanStafServiceInterface;
use App\Services\PenerimaanSiswaBaru\PenerimaanSiswaBaruService;
use App\Services\PenerimaanSiswaBaru\PenerimaanSiswaBaruServiceInterface;
use App\Services\SiswaBerprestasi\SiswaBerprestasiService;
use App\Services\SiswaBerprestasi\SiswaBerprestasiServiceInterface;
use App\Services\PengaturanAplikasiService\PengaturanAplikasiServiceService;
use App\Services\PengaturanAplikasiService\PengaturanAplikasiServiceServiceInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public $singletons = [
        PengaturanAplikasiServiceServiceInterface::class => PengaturanAplikasiServiceService::class,
        DashboardServiceInterface::class => DashboardService::class,
        BeritaServiceInterface::class => BeritaService::class,
        GaleriServiceInterface::class => GaleriService::class,
        TestimoniServiceInterface::class => TestimoniService::class,
        SiswaBerprestasiServiceInterface::class => SiswaBerprestasiService::class,
        GuruDanStafServiceInterface::class => GuruDanStafService::class,
        PenerimaanSiswaBaruServiceInterface::class => PenerimaanSiswaBaruService::class,
        PagesServiceInterface::class => PagesService::class,
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
