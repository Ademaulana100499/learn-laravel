<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// --- Contoh dari materi Laravel Dasar ---

// 1. Route closure (tanpa controller) — seperti di 02-routing
Route::get('/hello', function () {
    return 'Hello World';
});

// 2. Route ke view langsung
Route::view('/info', 'info');

// 3. Route ke controller
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// 4. Route dengan parameter dinamis (contoh: /users/5)
Route::get('/users/{id}', [PageController::class, 'showUser'])->name('users.show');

// 5. Contoh response JSON (API-style)
Route::get('/api/hello', [PageController::class, 'apiHello']);

// Halaman default Laravel (opsional; bisa dihapus kalau sudah pakai home di atas)
Route::get('/welcome', function () {
    return view('welcome');
});
