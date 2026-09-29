<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('books', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Syarat Wajib (Admin yg input)
        $table->string('judul');          // Kolom 1
        $table->string('penulis');        // Kolom 2
        $table->string('penerbit');       // Kolom 3
        $table->integer('tahun_terbit');  // Kolom 4
        $table->integer('stok');          // Kolom 5
        $table->string('kategori'); // Contoh: Novel, Komik
        $table->string('rak');      // Contoh: A-01
        $table->integer('lantai');  // Contoh: 1, 2
        $table->string('cover_image')->nullable(); // Fitur Keren (Upload Gambar)
        $table->timestamps(); // Syarat Wajib
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
