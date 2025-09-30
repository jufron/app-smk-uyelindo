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
        Schema::create('siswa_berprestasi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap')->unique();
            $table->string('kelas');
            $table->string('jenis_prestasi');
            $table->string('peringkat');
            $table->string('tahun');
            $table->string('foto')->nullable();
            $table->string('tingkat')->nullable(); // tingkat lomba: sekolah, kota, provinsi, nasional, dll
            $table->string('nama_penyelenggara')->nullable();
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa_berprestasi');
    }
};
