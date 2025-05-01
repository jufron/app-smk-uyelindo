<?php

namespace App\Observers;

use App\Models\Berita;
use Illuminate\Support\Facades\Cache;

class BeritaObserver
{
    /**
     * Handle the Berita "created" event.
     */
    public function created(Berita $berita): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the Berita "updated" event.
     */
    public function updated(Berita $berita): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the Berita "deleted" event.
     */
    public function deleted(Berita $berita): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the Berita "restored" event.
     */
    public function restored(Berita $berita): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the Berita "force deleted" event.
     */
    public function forceDeleted(Berita $berita): void
    {
        $this->destroyCache();
    }

    private function destroyCache () 
    {
        Cache::forget('berita_terbaru');
        Cache::forget('daftar_berita');

        Cache::forget('berita_count');
        Cache::forget('berita_publish_count');
        Cache::forget('berita_draft_count');
    }
}
