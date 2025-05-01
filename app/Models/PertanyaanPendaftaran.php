<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\DateFormatCreatedAtAndUpdatedAt;
use App\Observers\PertanyaanPendaftaranObserver;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy([PertanyaanPendaftaranObserver::class])]

class PertanyaanPendaftaran extends Model
{
    /** @use HasFactory<\Database\Factories\PertanyaaanPendaftaranFactory> */
    use HasFactory, DateFormatCreatedAtAndUpdatedAt;

    protected $table = 'pertanyaan_pendaftaran';

    protected $fillable = [
        'pertanyaan',
        'jawaban',
    ];

    public function pertanyaanLimit () : Attribute
    {
        return Attribute::make(
            get: fn () => Str::limit($this->pertanyaan, 45, '...')
        );
    }

    public function jawabanLimit () : Attribute
    {
        return Attribute::make(
            get: fn () => Str::limit($this->jawaban, 45, '...')
        );
    }
}
