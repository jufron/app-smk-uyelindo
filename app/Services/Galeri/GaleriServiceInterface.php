<?php

namespace App\Services\Galeri;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

interface GaleriServiceInterface
{
    public function getAll () : JsonResponse;

    public function storeGaleri (Request $request) : void;

    // public function showBerita (Berita $berita) : JsonResponse;

    public function updateGaleri ($request, $berita) : void;

    public function destroyGaleri (Galeri $berita) : void;
}
