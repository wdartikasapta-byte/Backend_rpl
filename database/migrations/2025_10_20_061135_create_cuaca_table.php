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
        Schema::create('cuaca', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kota_id'); // relasi ke tabel kota
            $table->date('tanggal');
            $table->float('suhu_min');
            $table->float('suhu_max');
            $table->integer('kelembaban');
            $table->float('curah_hujan');
            $table->string('angin');
            $table->timestamps();

            // foreign key jika ada tabel kota
            $table->foreign('kota_id')->references('id')->on('kota')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuaca');
    }
};
