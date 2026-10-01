<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing  

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


# 📚 Sistem Pencatatan Buku Perpustakaan

## 📖 Tentang Project

**Sistem Pencatatan Buku Perpustakaan** adalah aplikasi berbasis web yang dibuat untuk membantu proses pengelolaan data buku dan peminjaman buku di perpustakaan.

Project ini dikembangkan sebagai salah satu project pembelajaran dalam pengembangan aplikasi web menggunakan **Laravel**.

Sistem menyediakan beberapa fungsi utama seperti pengelolaan data buku, pencatatan peminjaman, autentikasi pengguna, pengelolaan profil, serta beberapa fitur pendukung untuk membantu proses administrasi perpustakaan.

---

## 🎯 Tujuan Project

Project ini dibuat dengan beberapa tujuan:

- Membuat sistem pencatatan buku berbasis web.
- Mempermudah pengelolaan data buku.
- Membantu proses pencatatan peminjaman buku.
- Mengurangi proses pencatatan secara manual.
- Menerapkan konsep CRUD dalam aplikasi web.
- Menerapkan autentikasi dan manajemen pengguna.
- Menerapkan database pada aplikasi berbasis Laravel.
- Mempelajari pengembangan aplikasi web menggunakan framework Laravel.

---

## ✨ Fitur Utama

### 🔐 1. Autentikasi Pengguna

Sistem menyediakan fitur autentikasi pengguna yang terdiri dari:

- Login
- Register
- Logout
- Verifikasi email
- Lupa password
- Reset password
- Konfirmasi password
- Pengubahan password
- Pengelolaan informasi profil

---

### 📚 2. Pengelolaan Data Buku

Sistem menyediakan fitur untuk mengelola data buku.

Fitur yang tersedia meliputi:

- Menampilkan daftar buku
- Menambahkan data buku
- Mengubah data buku
- Menghapus data buku
- Melihat informasi buku
- Pencarian data buku
- Pengelolaan stok buku
- Pembuatan tampilan data buku dalam bentuk PDF

Data buku yang digunakan dalam sistem mencakup informasi seperti:

- Kode buku
- Judul
- Penulis
- Penerbit
- Tahun
- Kategori
- Stok

---

### 📖 3. Pencatatan Peminjaman Buku

Sistem juga menyediakan fitur untuk melakukan pencatatan peminjaman buku.

Fitur peminjaman meliputi:

- Menampilkan data peminjaman
- Menambahkan data peminjaman
- Mencatat informasi peminjam
- Mencatat buku yang dipinjam
- Mengelola data peminjaman
- Menampilkan informasi status peminjaman

---

### 📷 4. Scanner

Project menyediakan halaman scanner yang digunakan sebagai bagian dari proses pencatatan peminjaman.

Fitur ini terdapat pada bagian:

`resources/views/borrowings/scanner.blade.php`

---

### 📧 5. Notifikasi Peminjaman

Sistem memiliki fitur notifikasi melalui email yang digunakan untuk memberikan informasi terkait proses peminjaman.

Implementasi email terdapat pada:

`app/Mail/NotifikasiBorrowing.php`

dan tampilan email terdapat pada:

`resources/views/emails/notifikasi_borrowing.blade.php`

---

### 👤 6. Manajemen Profil

Pengguna dapat mengelola informasi akun melalui halaman profil.

Fitur yang tersedia meliputi:

- Mengubah informasi profil
- Mengubah password
- Menghapus akun

---

## 🛠️ Teknologi yang Digunakan

Project ini menggunakan beberapa teknologi berikut:

| Teknologi | Penggunaan |
|---|---|
| Laravel | Framework utama aplikasi |
| PHP | Bahasa pemrograman backend |
| MySQL | Database |
| Blade | Template engine |
| Tailwind CSS | Styling tampilan |
| Vite | Pengelolaan asset frontend |
| JavaScript | Interaksi pada halaman web |
| HTML | Struktur halaman |
| CSS | Tampilan halaman |
| Composer | Dependency management PHP |
| npm | Dependency management frontend |

---

## 🏗️ Struktur Project

Struktur utama project:

```text
SistemPencatatanBukuPerpustakaan/
│
├── app/
│   ├── Http/
│   ├── Mail/
│   ├── Models/
│   └── Providers/
│
├── bootstrap/
│
├── config/
│
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
│
├── public/
│
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── auth/
│       ├── books/
│       ├── borrowings/
│       ├── components/
│       ├── emails/
│       ├── layouts/
│       └── profile/
│
├── routes/
│
├── storage/
│
├── tests/
│
├── composer.json
├── package.json
├── phpunit.xml
├── tailwind.config.js
└── vite.config.js

🗂️ Struktur Modul
Modul Buku
resources/views/books/
├── create.blade.php
├── edit.blade.php
├── index.blade.php
└── pdf.blade.php

Modul ini digunakan untuk mengelola data buku dan menampilkan data buku.

Modul Peminjaman
resources/views/borrowings/
├── create.blade.php
├── index.blade.php
└── scanner.blade.php

Modul ini digunakan untuk proses pencatatan dan pengelolaan peminjaman buku.

Modul Autentikasi
resources/views/auth/
├── login.blade.php
├── register.blade.php
├── forgot-password.blade.php
├── reset-password.blade.php
├── confirm-password.blade.php
└── verify-email.blade.php

Modul ini digunakan untuk proses autentikasi pengguna.

🗄️ Database

Project menggunakan database untuk menyimpan data aplikasi.

Beberapa migration yang terdapat dalam project antara lain:

database/migrations/

0001_01_01_000000_create_users_table.php
0001_01_01_000001_create_cache_table.php
0001_01_01_000002_create_jobs_table.php

2025_12_17_081354_create_books_table.php
2025_12_17_083753_create_personal_access_tokens_table.php
2025_12_17_085335_add_role_to_users_table.php
2025_12_17_092554_create_borrowings_table.php
2025_12_19_132914_add_uuid_to_books_table.php

Model utama yang digunakan:

app/Models/
├── Book.php
├── Borrowing.php
└── User.php
🔄 Alur Sistem

Secara umum alur penggunaan sistem adalah:

User
  │
  ▼
Login / Register
  │
  ▼
Dashboard
  │
  ├───────────────┐
  ▼               ▼
Data Buku      Peminjaman
  │               │
  ▼               ▼
Tambah/Edit     Catat Peminjaman
Data Buku          │
  │                ▼
  ▼             Data Peminjaman
Database            │
  │                ▼
  └──────────────► Database
💻 Instalasi Project
1. Clone Repository

Clone repository menggunakan Git:

git clone https://github.com/defrisdoloksaribu/sistem-pencatatan-buku-perpustakaan.git

Masuk ke folder project:

cd sistem-pencatatan-buku-perpustakaan
2. Install Dependency Laravel

Jalankan:

composer install
3. Install Dependency Frontend

Jalankan:

npm install
4. Membuat File Environment

Buat file .env berdasarkan file konfigurasi environment Laravel.

Jika file .env.example tersedia:

copy .env.example .env

Pada Linux / macOS:

cp .env.example .env
5. Generate Application Key

Jalankan:

php artisan key:generate
6. Konfigurasi Database

Buka file:

.env

Kemudian sesuaikan konfigurasi database.

Contoh:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=perpustakaan
DB_USERNAME=root
DB_PASSWORD=

Nama database dapat disesuaikan dengan database yang digunakan pada komputer masing-masing.

7. Menjalankan Migration

Jalankan:

php artisan migrate

Jika ingin menjalankan migration sekaligus seeder:

php artisan migrate --seed
8. Menjalankan Aplikasi

Jalankan server Laravel:

php artisan serve

Kemudian buka:

http://127.0.0.1:8000
🎨 Menjalankan Frontend

Untuk menjalankan Vite dalam mode development:

npm run dev

Jika ingin membuat asset untuk production:

npm run build
🧪 Testing

Project menggunakan PHPUnit untuk melakukan pengujian aplikasi.

Untuk menjalankan seluruh test:

php artisan test

atau:

./vendor/bin/phpunit
📁 File Penting

Beberapa file penting dalam project:

Model
app/Models/Book.php
app/Models/Borrowing.php
app/Models/User.php
Controller

Controller aplikasi berada di:

app/Http/Controllers/
Routes

Route utama:

routes/web.php

Route API:

routes/api.php

Route autentikasi:

routes/auth.php
Views

Tampilan aplikasi berada di:

resources/views/
🔒 Keamanan

File konfigurasi environment seperti .env tidak disimpan di repository.

Beberapa file dan folder yang tidak perlu diunggah ke GitHub juga telah dimasukkan ke dalam .gitignore, seperti:

.env
/node_modules
/vendor
/public/build
/storage/*.key

Hal ini dilakukan agar file konfigurasi pribadi, dependency lokal, dan file hasil proses aplikasi tidak ikut masuk ke repository.

📌 Status Project

Status: Completed / Academic Project

Project ini dibuat sebagai project pembelajaran dan pengembangan aplikasi web.

Repository digunakan sebagai dokumentasi source code dan perkembangan project.

👨‍💻 Developer

Defris Doloksaribu

Mahasiswa Teknologi Komputer
Institut Teknologi Del

GitHub:

https://github.com/defrisdoloksaribu
📚 Pembelajaran yang Diperoleh

Melalui project ini, beberapa konsep yang dipelajari antara lain:

Pengembangan aplikasi web menggunakan Laravel
Konsep MVC
Routing
Controller
Model
Migration
Database
CRUD
Blade Template
Authentication
Authorization / Role
Form validation
Email notification
PDF generation
Frontend asset management
Git dan GitHub
Struktur project Laravel
Testing aplikasi
🚀 Pengembangan Selanjutnya

Project ini masih dapat dikembangkan dengan beberapa fitur tambahan, seperti:

Dashboard dengan statistik perpustakaan
Riwayat peminjaman yang lebih lengkap
Sistem pengembalian buku
Pencarian dan filter buku yang lebih detail
Laporan peminjaman berdasarkan periode
Pengembangan sistem notifikasi
Peningkatan tampilan antarmuka
Deployment aplikasi ke server
Integrasi sistem dengan layanan cloud
📸 Dokumentasi

Dokumentasi berupa screenshot aplikasi, diagram sistem, dan laporan project dapat ditambahkan ke repository untuk memberikan gambaran lebih jelas mengenai sistem yang dikembangkan.

📄 License

Project ini dibuat untuk keperluan pembelajaran dan pengembangan project akademik.

## Fitur Sistem

- Login dan autentikasi pengguna
- Dashboard informasi perpustakaan
- Manajemen data buku
- Pencarian buku
- Penambahan dan pengeditan data buku
- Pengelolaan stok buku
- Peminjaman dan pengembalian buku
- Persetujuan dan penolakan transaksi peminjaman
- Scanner untuk proses peminjaman
- Export data buku ke PDF

## Teknologi

- Laravel
- PHP
- MySQL
- Blade
- Tailwind CSS
- Vite
