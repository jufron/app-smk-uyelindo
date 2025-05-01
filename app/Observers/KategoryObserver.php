<?php

namespace App\Observers;

use App\Models\Kategory;
use Illuminate\Support\Facades\Cache;

class KategoryObserver
{
    /**
     * Handle the Kategory "created" event.
     */
    public function created(Kategory $kategory): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the Kategory "updated" event.
     */
    public function updated(Kategory $kategory): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the Kategory "deleted" event.
     */
    public function deleted(Kategory $kategory): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the Kategory "restored" event.
     */
    public function restored(Kategory $kategory): void
    {
        $this->destroyCache();
    }

    /**
     * Handle the Kategory "force deleted" event.
     */
    public function forceDeleted(Kategory $kategory): void
    {
        $this->destroyCache();
    }

    private function destroyCache () 
    {
        Cache::forget('kategory_count_cache');
    }
}
