<?php

namespace App\Observers;

use App\Models\PengaturanAplikasi;
use Illuminate\Support\Facades\Cache;

class PengaturanAplikasiObserver
{
    /**
     * Handle the PengaturanAplikasi "created" event.
     */
    public function created(PengaturanAplikasi $pengaturanAplikasi): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the PengaturanAplikasi "updated" event.
     */
    public function updated(PengaturanAplikasi $pengaturanAplikasi): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the PengaturanAplikasi "deleted" event.
     */
    public function deleted(PengaturanAplikasi $pengaturanAplikasi): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the PengaturanAplikasi "restored" event.
     */
    public function restored(PengaturanAplikasi $pengaturanAplikasi): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the PengaturanAplikasi "force deleted" event.
     */
    public function forceDeleted(PengaturanAplikasi $pengaturanAplikasi): void
    {
        $this->destroyCache();
    }

    private function destroyCache () 
    {
        Cache::forget('pengaturan_aplikasi');
    }
}
