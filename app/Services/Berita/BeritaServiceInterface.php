<?php

namespace App\Services\Berita;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

interface BeritaServiceInterface
{
    public function getAll () : JsonResponse;

    public function storeBerita (Request $request) : void;

    public function showBerita (Berita $berita) : JsonResponse;

    public function updateBerita ($request, $berita) : void;

    public function destroyBerita (Berita $berita) : void;
}
