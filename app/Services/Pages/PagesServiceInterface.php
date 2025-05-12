<?php

namespace App\Services\Pages;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\CursorPaginator;

interface PagesServiceInterface
{
    public function getPengaturanWhere($query): ?string;

    public function getPengaturanDateWhere ($query) : ?string;

    public function getBeritaLatestLimit (int $limit = 3) : Collection;

    public function getBeritaLatest () : CursorPaginator;

    public function getTestimoniLatestLimit (int $limit = 5) : Collection;

    public function getTestimoniLatest () : CursorPaginator;

    public function createTestimoni (Request $request) : void;

    public function getPertanyaanPendaftaranLatest () : Collection;

    public function penerimaanPesertaDidikBaru ($value) ;
}