<?php

namespace App\Services\Berita;

use App\Models\Berita;
use Illuminate\Http\JsonResponse;

interface BeritaServiceInterface
{
    public function getAll () : JsonResponse;

    public function showBerita (Berita $berita) : JsonResponse;
}
