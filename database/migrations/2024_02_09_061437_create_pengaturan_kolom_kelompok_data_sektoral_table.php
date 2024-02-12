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
        Schema::create('kelompok_data_sektoral_kolom', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengaturan_kolom_id');
            $table->unsignedBigInteger('kelompok_data_sektoral_id');
            $table->timestamps();

            $table->foreign('pengaturan_kolom_id')->references('id')->on('pengaturan_koloms')->onDelete('cascade');
            $table->foreign('kelompok_data_sektoral_id')->references('id')->on('kelompok_data_sektorals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaturan_kolom_kelompok_data_sektoral');
    }
};
