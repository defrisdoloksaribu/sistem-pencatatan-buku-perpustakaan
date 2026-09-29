<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController; 
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingController; 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// --- DASHBOARD (Via Controller) ---
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// --- GROUP ROUTE LOGIN ---
Route::middleware('auth')->group(function () {
    
    // 1. Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // 2. Manajemen Buku (Admin)
    Route::get('/books/export/pdf', [BookController::class, 'exportPdf'])->name('books.exportPdf');
    Route::resource('books', BookController::class);

    // 3. FITUR PEMINJAMAN & SCAN QR
    // -----------------------------------------------------------
    // List Peminjaman
    Route::get('/borrowings', [BorrowingController::class, 'index'])->name('borrowings.index');

    // Fitur Scan QR (Halaman Kamera & Proses Otomatis)
    Route::get('/borrowings/scan', [BorrowingController::class, 'scanner'])->name('borrowings.scanner');
    Route::get('/borrowings/process-scan/{uuid}', [BorrowingController::class, 'processScan'])->name('borrowings.processScan');

    // Form Manual
    Route::get('/borrowings/create/{book}', [BorrowingController::class, 'create'])->name('borrowings.create');
    Route::post('/borrowings/store/{book}', [BorrowingController::class, 'store'])->name('borrowings.store');

    // Admin Action (Approve, Reject, Return)
    Route::patch('/borrowings/{id}/approve', [BorrowingController::class, 'approve'])->name('borrowings.approve');
    Route::patch('/borrowings/{id}/reject', [BorrowingController::class, 'reject'])->name('borrowings.reject');
    Route::patch('/borrowings/{id}/return', [BorrowingController::class, 'returnBook'])->name('borrowings.return');
    // -----------------------------------------------------------
});

require __DIR__.'/auth.php';

/* 
|--------------------------------------------------------------------------
| ROUTE KHUSUS PERBAIKAN UUID (Hanya jalankan sekali saja)
|--------------------------------------------------------------------------
| Akses: http://127.0.0.1:8000/fix-uuid
*/
Route::get('/fix-uuid', function () {
    try {
        $books = \App\Models\Book::whereNull('uuid')->get();
        $count = 0;
        foreach ($books as $book) {
            $book->uuid = (string) \Illuminate\Support\Str::uuid();
            $book->save();
            $count++;
        }
        return "SUKSES! " . $count . " buku telah diperbarui UUID-nya. Sekarang buka halaman Daftar Buku, QR Code pasti muncul.";
    } catch (\Exception $e) {
        return "GAGAL! Pesan Error: " . $e->getMessage();
    }
});