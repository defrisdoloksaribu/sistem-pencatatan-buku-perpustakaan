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
        Schema::table('books', function (Blueprint $table) {
            // Tambahkan kolom uuid setelah kolom id
            // Kita kasih nullable() dulu karena data buku yang lama belum punya UUID
            $table->uuid('uuid')->unique()->after('id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            // Hapus kolom uuid jika migration di-rollback
            $table->dropColumn('uuid');
        });
    }
};