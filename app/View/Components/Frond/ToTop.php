<?php

namespace App\View\Components\Frond;

use Closure;
use Illuminate\View\Component;
use App\Models\PengaturanAplikasi;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class ToTop extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // * cache 6 hour
        $pengaturanCache = Cache::remember('pengaturan_aplikasi', 60*60*6, function() {
            return PengaturanAplikasi::all();
        });
        
        return view('components.frond.toTop', [
            'telepon_whatsapp'  => '+62' . substr($pengaturanCache->where('key', 'telepon_whatsapp')->first()->value, 1),
        ]);
    }
}
