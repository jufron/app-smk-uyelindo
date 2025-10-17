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
        Schema::create('daftar_siswa_baru', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('email')->unique();
            $table->string('nisn');
            $table->string('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('alamat_siswa', 100);
            $table->string('alamat_sekolah_sebelumnya', 100);
            $table->string('anak_ke');
            $table->string('status_anak', 50);
            $table->string('nomor_telepon_siswa');
            $table->string('jumlah_saudara_kandung');
            $table->string('tinggal_dengan');
            $table->string('nama_lengkap_wali_murid')->nullable();
            $table->string('pekerjaan_wali_murid')->nullable();
            $table->string('hubungan_dengan_siswa')->nullable();
            $table->string('alamat_wali_siswa')->nullable();
            $table->string('nomor_hp_wali')->nullable();
            $table->string('nama_lengkap_ayah')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('pendidikan_ayah')->nullable();
            $table->string('nama_lengkap_ibu')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('pendidikan_ibu')->nullable();
            $table->string('nomor_telepon_orang_tua')->nullable();
            $table->string('alamat_orang_tua')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_siswa_baru');
    }
};
