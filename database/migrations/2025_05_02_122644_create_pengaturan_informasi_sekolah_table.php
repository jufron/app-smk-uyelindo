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
        Schema::create('pengaturan_informasi_sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique(); // contoh: 'sejarah', 'visi', 'gelombang_1'
            $table->text('value')->nullable(); // bisa simpan HTML, teks, dsb.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaturan_informasi_sekolah');
    }
};
