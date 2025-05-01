<?php

namespace App\Observers;

use App\Models\Testimoni;
use Illuminate\Support\Facades\Cache;

class TestimoniObserver
{
    /**
     * Handle the Testimoni "created" event.
     */
    public function created(Testimoni $testimoni): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the Testimoni "updated" event.
     */
    public function updated(Testimoni $testimoni): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the Testimoni "deleted" event.
     */
    public function deleted(Testimoni $testimoni): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the Testimoni "restored" event.
     */
    public function restored(Testimoni $testimoni): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the Testimoni "force deleted" event.
     */
    public function forceDeleted(Testimoni $testimoni): void
    {
        $this->destroyCache();
    }

    private function destroyCache () 
    {
        Cache::forget('testimoni_terbaru');
        Cache::forget('daftar_testimoni');
        
        Cache::forget('testimoni_count');
        Cache::forget('testimoni_where_month_count');
        Cache::forget('testimoni_publish_count');
        Cache::forget('testimoni_draft_count');
    }
}
