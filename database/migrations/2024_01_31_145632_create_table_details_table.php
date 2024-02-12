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
        Schema::create('table_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelompok_data_sektoral_id');
            $table->string('nama_kecamatan')->nullable();
            $table->string('nama_ibu_kota')->nullable();
            $table->integer('jumlah_desa')->nullable();
            $table->integer('jumlah_kelurahan')->nullable();
            $table->integer('tahun')->nullable();
            $table->integer('jumlah_penduduk'   )->nullable();
            $table->integer('jumlah_penduduk_laki_laki')->nullable();
            $table->integer('jumlah_penduduk_perempuan')->nullable();
            $table->integer('rata_rata_anggota_keluarga')->nullable();
            $table->integer('belum_kawin')->nullable();
            $table->integer('kawin')->nullable();
            $table->integer('cerai_hidup')->nullable();
            $table->integer('cerai_mati')->nullable();
            $table->integer('jumlah')->nullable();
            $table->string('ketinggian')->nullable();
            $table->double('luas')->nullable();
            $table->timestamps();

            $table->foreign('kelompok_data_sektoral_id')->references('id')->on('kelompok_data_sektorals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_details');
    }
};
