<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\DateFormatCreatedAtAndUpdatedAt;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    /** @use HasFactory<\Database\Factories\BeritaFactory> */
    use HasFactory, DateFormatCreatedAtAndUpdatedAt;

    protected $table = 'berita';

    protected $fillable = [
        'poster',
        'judul',
        'slug',
        'content',
        'kategory_id',
        'status',
        'user_id'
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    protected function posterUrl(): Attribute
    {
        return Attribute::make(
            get: fn () =>  $this->attributes['poster'] && Storage::disk('public')->exists($this->attributes['poster'])
                            ? Storage::url($this->attributes['poster'])
                            : asset('img/defaultsvg.svg')
        );
    }

    protected function judulLimit(): Attribute
    {
        return Attribute::make(
            get: fn () => Str::limit($this->judul, 50),
        );
    }

    protected function contentLimit(): Attribute
    {
        return Attribute::make(
            get: fn () => Str::limit(strip_tags($this->content), 50),
        );
    }

    public function kategory() : BelongsTo
    {
        return $this->belongsTo(Kategory::class, 'kategory_id', 'id');
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
