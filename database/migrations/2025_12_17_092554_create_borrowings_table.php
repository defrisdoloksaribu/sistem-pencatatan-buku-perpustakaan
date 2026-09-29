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
    Schema::create('borrowings', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // Akun Login
        $table->foreignId('book_id')->constrained()->cascadeOnDelete(); // Buku yang dipinjam
        
        // Identitas Form (Sesuai Request)
        $table->string('nim');
        $table->string('nama_lengkap');
        $table->string('prodi');
        $table->string('angkatan');
        
        // Tanggal
        $table->date('tanggal_pinjam');
        $table->date('tanggal_kembali');
        
        // Status: pending (menunggu), approved (dipinjam), rejected (ditolak), returned (sudah balik)
        $table->enum('status', ['pending', 'approved', 'rejected', 'returned'])->default('pending');
        
        $table->timestamps();
    });
}
};
