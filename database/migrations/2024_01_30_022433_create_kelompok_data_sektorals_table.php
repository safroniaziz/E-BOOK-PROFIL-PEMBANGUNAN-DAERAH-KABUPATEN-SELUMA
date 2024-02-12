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
        Schema::create('kelompok_data_sektorals', function (Blueprint $table) {
            $table->id();
            $table->string('kelompok_data');
            $table->string('sumber_data')->nullable();
            $table->text('deskripsi_singkat')->nullable();
            $table->string('dokumen_pdf')->nullable();
            $table->string('dokumen_word')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelompok_data_sektorals');
    }
};
