<?php

namespace App\Observers;

use App\Models\PertanyaanPendaftaran;
use Illuminate\Support\Facades\Cache;

class PertanyaanPendaftaranObserver
{
    /**
     * Handle the PertanyaanPendaftaran "created" event.
     */
    public function created(PertanyaanPendaftaran $pertanyaanPendaftaran): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the PertanyaanPendaftaran "updated" event.
     */
    public function updated(PertanyaanPendaftaran $pertanyaanPendaftaran): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the PertanyaanPendaftaran "deleted" event.
     */
    public function deleted(PertanyaanPendaftaran $pertanyaanPendaftaran): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the PertanyaanPendaftaran "restored" event.
     */
    public function restored(PertanyaanPendaftaran $pertanyaanPendaftaran): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the PertanyaanPendaftaran "force deleted" event.
     */
    public function forceDeleted(PertanyaanPendaftaran $pertanyaanPendaftaran): void
    {
        $this->destroyCache();
    }

    private function destroyCache () 
    {
        Cache::forget('pertanyaan_pendaftaran');
        Cache::forget('pertanyaan_ppdb_count_cache');
    }
}
