<?php

namespace Database\Seeders;

use App\Models\Kategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect([
            [
                'nama'          => 'Elektronik',
                'slug'          => 'elektronik',
                'deskripsi'     => 'Kategori untuk barang elektronik'
            ],
            [
                'nama'          => 'Pakaian',
                'slug'          => 'pakaian',
                'deskripsi'     => 'Kategori untuk pakaian dan fashion'
            ],
            [
                'nama'          => 'Makanan',
                'slug'          => 'makanan',
                'deskripsi'     => 'Kategori untuk makanan dan minuman'
            ],
            [
                'nama'          => 'Peralatan Rumah',
                'slug'          => 'peralatan-rumah',
                'deskripsi'     => 'Kategori untuk peralatan rumah tangga'
            ]
        ])->each(function ($kat) {
            Kategory::create($kat);
        });
    }
}
