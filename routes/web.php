<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Auth (tamu saja — belum login)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

/*
|--------------------------------------------------------------------------
| Halaman aplikasi — wajib login
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::get('/users/{id}', [PageController::class, 'showUser'])->name('users.show');

    Route::get('/hello', function () {
        return 'Hello World';
    });

    Route::view('/info', 'info');

    Route::get('/api/hello', [PageController::class, 'apiHello']);
});

/*
|--------------------------------------------------------------------------
| Publik (tanpa auth) — halaman default Laravel
|--------------------------------------------------------------------------
*/
Route::get('/welcome', function () {
    return view('welcome');
});
