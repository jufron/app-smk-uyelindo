<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('guru_and_staf', function (Blueprint $table) {
            $table->id();
            $table->string('foto')->nullable();
            $table->string('nama_lengkap', 200);
            $table->string('nip')->nullable();
            $table->string('nuptx')->nullable();
            $table->string('ptx')->nullable();
            $table->string('status_kewarganegaraan', 150);
            $table->string('sk_pengangkatan')->nullable();
            $table->string('lembaga_pengangkatan')->nullable();
            $table->string('agama');
            $table->string('alamat')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('nama_dusun')->nullable();
            $table->string('desa_kelurahan');
            $table->string('kecamatan');
            $table->string('kode_pos')->nullable();
            $table->string('telepon');
            $table->string('email')->unique();
            $table->string('sumber_gaji');
            $table->string('nama_ibu_kandung');
            $table->string('status_perkawinan');
            $table->string('nik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru_and_staf');
    }
};
