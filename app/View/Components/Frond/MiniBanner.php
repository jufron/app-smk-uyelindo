<?php

namespace App\View\Components\frond;

use Closure;
use Illuminate\View\Component;
use App\Models\PengaturanAplikasi;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class MiniBanner extends Component
{
    protected $scrollPosition;

    /**
     * Create a new component instance.
     */
    public function __construct($scrollPosition = 500)
    {
        $this->scrollPosition = $scrollPosition;
    }

    private function cachePengaturanAplikasi ()
    {
        // * cache 6 hour
        return Cache::remember('pengaturan_aplikasi', 60*60*6, function() {
            return PengaturanAplikasi::all();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View | Closure | string | null
    {
        $popup_pendaftaran = $this->cachePengaturanAplikasi()->where('key', 'popup_pendaftaran')->first()->value;

        if ($popup_pendaftaran !== null) {
            return view('components.frond.mini-banner');
        } else {
            return null;
        }
    }
}
