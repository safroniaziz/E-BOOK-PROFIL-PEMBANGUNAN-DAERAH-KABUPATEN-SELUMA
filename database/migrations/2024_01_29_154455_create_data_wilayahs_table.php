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
        Schema::create('data_wilayahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wilayah');
            $table->string('luas_wilayah');
            $table->string('nama_ibu_kota');
            $table->string('jumlah_desa');
            $table->string('jumlah_kelurahan');

            $table->string('jumlah_penduduk_per_jenis_kelamin');
            $table->string('jumlah_penduduk_laki_laki_per_jenis_kelamin');
            $table->string('jumlah_penduduk_perempuan_per_jenis_kelamin');

            $table->string('jumlah_penduduk_per_kk');
            $table->string('jumlah_penduduk_laki_laki_per_kk');
            $table->string('jumlah_penduduk_perempuan_per_kk');

            $table->string('jumlah_penduduk_per_anggota_keluarga');
            $table->string('jumlah_kepala_keluarga');
            $table->string('rata_rata_anggota_keluarga');

            $table->string('jumlah_penduduk_per_status_perkawinan');
            $table->string('jumlah_penduduk_belum_kawin');
            $table->string('jumlah_penduduk_kawin');
            $table->string('jumlah_penduduk_cerai_hidup');
            $table->string('jumlah_penduduk_cerai_mati');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_wilayahs');
    }
};
