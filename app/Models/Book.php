<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str; // Tambahkan ini agar UUID bisa dibuat

class Book extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi
    protected $fillable = [
        'uuid', 
        'user_id', 
        'judul', 
        'penulis', 
        'penerbit', 
        'tahun_terbit', 
        'stok', 
        'cover_image',
        'kategori',
        'rak',
        'lantai'
    ];

    /**
     * Otomatis membuatkan UUID saat buku baru ditambahkan
     */
    protected static function booted()
    {
        static::creating(function ($book) {
            if (empty($book->uuid)) {
                $book->uuid = (string) Str::uuid();
            }
        });
    }

    // Relasi ke User (Admin yang input)
    public function user() {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Peminjaman
    public function borrowings() {
        return $this->hasMany(Borrowing::class);
    }
}