<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Akun ADMIN (Password: Yaspor123)
        User::create([
            'name' => 'Admin Perpustakaan',
            'email' => 'immanueltampubolon594@gmail.com', 
            'password' => Hash::make('Yaspor123'), // <--- SUDAH DIGANTI
            'role' => 'admin',
        ]);

        // 2. Buat Akun MAHASISWA Dummy
        User::create([
            'name' => 'Mahasiswa Contoh',
            'email' => 'maba@test.com',
            'password' => Hash::make('password'), // Ini biarkan default atau ganti juga boleh
            'role' => 'mahasiswa',
        ]);
    }
}