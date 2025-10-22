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
        Schema::create('rekomendasi_tanam', function (Blueprint $table) {
            $table->id();
            $table->foreignId('musim_id')->constrained('musim')->onDelete('cascade');
            $table->foreignId('komoditas_id')->constrained('komoditas')->onDelete('cascade');
            $table->foreignId('lahan_id')->constrained('lahan')->onDelete('cascade');
            $table->string('judul');
            $table->text('deskripsi');
            $table->timestamps();
            
            // relasi ke tabel lain
            $table->foreign('musim_id')->references('id')->on('musim')->onDelete('cascade');
            $table->foreign('komoditas_id')->references('id')->on('komoditas')->onDelete('cascade');
            $table->foreign('lahan_id')->references('id')->on('lahan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rekomendasi_tanam');
    }
};
