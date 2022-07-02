<?php

// use App\Http\Controllers\GejalaController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\ArtikelController;
// use App\Http\Controllers\GejalaController;
// use App\Http\Controllers\PenyakitController;
use Illuminate\Support\Facades\Route;


Route::get('/konsultasi', [KonsultasiController::class, 'create']);
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::get('admin', [DashboardController::class, 'index'])->name('admin');
});

Route::get('/', function () {

    return view('user.home');
});


Route::get('/infopenyakit', 'PenyakitController@infoPenyakit');

// Route::get('/register', function () {
//     return view('admin.auth.register');
// });

Route::get('/kontak', function () {
    return view('user.kontak');
});

Route::get('/tentang', function () {
    return view('user.tentang');
});

Route::get('/infogejala', function () {
    return view('user.infogejala');
});

// profil
Route::resource('profil', ProfilController::class);
// setting profil
Route::get('setting', 'ProfilController@setting');

Route::put('update-password/{id?}', 'LoginController@updatePassword')->name('update-password');

//CRUD
Route::resource('artikel', ArtikelController::class);
//  Route::get('artikel', [ArtikelController::class, 'index']);
Route::resource('penyakit', PenyakitController::class);
//  Route::get('penyakit', [PenyakitController::class, 'index']);
Route::resource('gejala', GejalaController::class);
//  Route::get('gejala', [GejalaController::class, 'index']);
Route::resource('rule', RuleController::class);

//LOGIN DAN REGISTRASI
Route::get('registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
Route::post('simpanregistrasi', [RegisterController::class, 'store'])->name('simpanregistrasi');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('register', [RegisterController::class, 'register']);
Route::post('register', [RegisterController::class, 'store']);

//LOGOUT
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/konsultasi', [KonsultasiController::class, 'index']);
