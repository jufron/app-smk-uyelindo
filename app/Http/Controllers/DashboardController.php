<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategory;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        // cache 1 hour
        $kategory = cache()->remember('categories_count', 3600, function() {
            return Kategory::count();
        });

        // cache 1 hour
        $berita = cache()->remember('news_count', 3600, function() {
            return Berita::count();
        });

        notify()->success('Welcome to dashboard');
        return view('dashboard.index', compact('kategory', 'berita'));
    }
}
