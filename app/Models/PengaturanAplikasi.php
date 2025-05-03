<?php

namespace App\Models;

use App\Observers\PengaturanAplikasiObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy([PengaturanAplikasiObserver::class])]

class PengaturanAplikasi extends Model
{
    protected $table = 'pengaturan_informasi_sekolah';

    protected $fillable = [
        'key',
        'value',
    ];
}
