<?php

use App\Http\Controllers\CatatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.Index.login', [
//         'title' => 'Login'
//     ]);
// })->name('index');

// Ghandi ndak bisa login aku pakek iki Route tanpa login Edit UI Login, Home
// Route::get('/', [LoginController::class, 'index'])->name('index');
// Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::post('/storeCatatan', [CatatanController::class, 'store'])->name('storeCatatan');
// Route::delete('/deleteCatatan/{id}', [CatatanController::class, 'destroy'])->name('deleteCatatan');
// Route::put('/updateCatatan/{id}', [CatatanController::class, 'update'])->name('updateCatatan');


// fix routes
Route::get('/register/view', [RegisterController::class, 'index'])->name('registerForms');

Route::get('/', [LoginController::class, 'index'])->name('index');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/submitLogin', [LoginController::class, 'submitLogin'])->name('submitLogin');

Route::group(['middleware' => 'mahasiswa'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/notifikasi', [NotifikasiController::class, 'index'])->name('/notifikasi');
});
Route::get('/notifikasi', [NotifikasiController::class, 'index'])->name('notifikasi');

//route buat form buat catatannya
Route::post('/storeCatatan', [CatatanController::class, 'store'])->name('storeCatatan');
Route::post('/storeTugas', [TugasController::class, 'store'])->name('storeTugas');

//update data tabel jadwalharian
Route::put('/updateCatatan/{id}', [CatatanController::class, 'update'])->name('updateCatatan');

//route delete data jalwalharian dan tugas
Route::delete('/deleteCatatan/{id}', [CatatanController::class, 'destroy'])->name('deleteCatatan');
Route::delete('/deleteTugas/{id}', [TugasController::class, 'delete'])->name('deleteTugas');

Route::get('/register/view', [RegisterController::class, 'index'])->name('registerForms');
Route::post('/register/data', [RegisterController::class, 'submitRegister'])->name('submitRegister');
