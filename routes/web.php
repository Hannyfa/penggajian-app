<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function (){
    Route::get('/',[LoginController::class,'index'])->name('login');
    Route::post('/',[LoginController::class,'login']);

    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::get('/home', function () {
    return redirect('/user');
});
Route::middleware(['auth'])->group(function (){
    Route::get('/user',[HomeController::class,'index']);
    Route::get('/logout',[LoginController::class,'logout']);
    
    Route::get('/laporan-gaji/{id_karyawan}', [KaryawanController::class, 'generatePDF'])->name('karyawan.laporan');
    Route::resource('karyawan', KaryawanController::class);
    
    Route::get('/input', [GajiController::class, 'input'])->name('gaji.input');
    Route::post('/hitung-gaji', [GajiController::class, 'hitungGaji'])->name('gaji.hitung');
    Route::resource('gaji', GajiController::class);

});
