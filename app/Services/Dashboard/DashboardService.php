<?php

namespace App\Services\Dashboard;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Kategory;
use App\Models\Testimoni;
use App\Models\PertanyaanPendaftaran;
use App\Models\SiswaBerprestasi;
use Illuminate\Support\Facades\Cache;
use App\Services\Dashboard\DashboardServiceInterface;

class DashboardService implements DashboardServiceInterface
{
    public function kategoryAllCount () : int
    {
        // 3 hour
        return Cache::remember('kategory_count_cache', 10800, function () {
            return Kategory::count();
        });
    }

    public function pertanyaanPpdbAllCount () : int
    {
        // 3 hour
        return Cache::remember('pertanyaan_ppdb_count_cache', 10800, function () {
            return PertanyaanPendaftaran::count();
        });
    }

    public function beritaAllCount() : int
    {
        // 3 hour
        return Cache::remember('berita_count', 10800, function () {
            return Berita::count();
        });
    }

    public function beritaPublishCount () : int
    {
        // 3 hour
        return Cache::remember('berita_publish_count', 10800, function () {
            return Berita::where('status', 1)->count();
        });
    }

    public function beritaDraftCount () : int
    {
        // 3 hour
        return Cache::remember('berita_draft_count', 10800, function () {
            return Berita::where('status', 0)->count();
        });
    }

    public function galeriFotoAllCount () : int
    {
        // 3 hour
        return Cache::remember('galeri_foto_count', 10800, function () {
            return Galeri::query()->count();
        });
    }

    public function testimoniAllCount () : int
    {
        // hour
        return Cache::remember('testimoni_count', 10800, function () {
            return Testimoni::count();
        });
    }

    public function testimoniWhereMonthCount () : int
    {
        // hour
        return Cache::remember('testimoni_where_month_count', 10800, function () {
            return Testimoni::whereMonth('created_at', now()->month)->count();
        });
    }

    public function testimoniPublishCount () : int
    {
        // 3 hour
        return Cache::remember('testimoni_publish_count', 10800, function () {
            return Testimoni::where('status', 1)->count();
        });
    }

    public function testimoniDraftCount () : int
    {
        // 3 hour
        return Cache::remember('testimoni_draft_count', 10800, function () {
            return Testimoni::where('status', 0)->count();
        });
    }

    public function siswaBerprestasiCount(): int
    {
        // 3 hour
        return Cache::remember('siswa_berprestasi_count', 10800, function () {
            return SiswaBerprestasi::query()->count();
        });
    }
}
