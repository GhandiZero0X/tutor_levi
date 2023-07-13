<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Web\MahasiswaController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.Index.login', [
//         'title' => 'Login'
//     ]);
// })->name('index');

Route::get('/coba', function () {
    return view('pages.users.home', [
        'title' => 'home',
        'namaUser' => 'ghandi'
    ]);
})->name('home');

Route::get('/cobalogin', function () {
    return view('pages.index.login', [
        'title' => 'login',
    ]);
})->name('index');

Route::get('/cobaregis', function () {
    return view('pages.index.registrasi', [
        'title' => 'registrasi',
    ]);
})->name('registrasi');

Route::get('/', [LoginController::class, 'index'])->name('index');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/submitLogin', [LoginController::class, 'submitLogin'])->name('submitLogin');

Route::group(['middleware' => 'mahasiswa'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/notifikasi', [MahasiswaController::class, 'notifikasi'])->name('notifikasi');
});

Route::get('/register/view', [RegisterController::class, 'index'])->name('registerForms');
Route::post('/register/data', [RegisterController::class, 'submitRegister'])->name('submitRegister');
