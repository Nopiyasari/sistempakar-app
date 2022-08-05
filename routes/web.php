<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\DiagnosaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\RiwayatController;
use Illuminate\Support\Facades\Route;




//route beranda user
Route::get('/', 'UserController@home')->name('home-utama');
Route::get('/infopenyakit', 'UserController@infoPenyakit')->name('infopenyakit');
Route::get('/kontak', 'UserController@kontak')->name('kontak');
Route::get('/tentang-kami', 'UserController@tentang')->name('tentang');

Route::group(['middleware' => ['auth', 'ceklevel:user']], function () {

    Route::group(['prefix' => '/pasien'], function () {
        Route::get('/', [PasienController::class, 'index'])->name('pasien.index');
        Route::post('/daftar', [PasienController::class, 'daftar'])->name('pasien.daftar');
    });
    //Diagnosa
    Route::group(['prefix' => '/diagnosa'], function () {
        Route::get('/', [DiagnosaController::class, 'index'])->name('diagnosa.list');
        Route::post('/hasil', [DiagnosaController::class, 'diagnosa'])->name('diagnosa');
    });
});

//Middleware
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::get('admin', [DashboardController::class, 'index'])->name('admin');
    Route::get('/log-konsultasi', [RiwayatController::class, 'logKonsultasi'])->name('log-konsultasi');
    Route::post('/updatehasil/{id}', [RiwayatController::class, 'updatehasil'])->name('updatehasil');
    Route::get('log-konsultasi/detail/{id}', [RiwayatController::class, 'detailLog'])->name('log-konsultasi.detail');

    //CRUD Admin

    //data_admin
    Route::group(['prefix' => '/data_admin'], function () {
        Route::get('/', [AdminController::class, 'index'])->name('data_admin');
        Route::get('/create', [AdminController::class, 'create'])->name('data_admin.create');
        Route::post('/store', [AdminController::class, 'store'])->name('data_admin.store');
        Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('data_admin.edit');
        Route::post('/update/{id}', [AdminController::class, 'update'])->name('data_admin.update');
        Route::delete('/destroy/{id}', [AdminController::class, 'destroy'])->name('data_admin.destroy');
    });
    //data_admin
    Route::group(['prefix' => '/data_user'], function () {
        Route::get('/', [DataUserController::class, 'index'])->name('data_user');
        Route::delete('/destroy/{id}', [DataUserController::class, 'destroy'])->name('data_user.destroy');
    });

    //Penyakit
    Route::group(['prefix' => '/penyakit'], function () {
        Route::get('/', [App\Http\Controllers\PenyakitController::class, 'index'])->name('penyakit');
        Route::get('/create', [App\Http\Controllers\PenyakitController::class, 'create'])->name('penyakit.create');
        Route::post('/store', [App\Http\Controllers\PenyakitController::class, 'store'])->name('penyakit.store');
        Route::get('/edit/{id}', [App\Http\Controllers\PenyakitController::class, 'edit'])->name('penyakit.edit');
        Route::post('/update/{id}', [App\Http\Controllers\PenyakitController::class, 'update'])->name('penyakit.update');
        Route::delete('/destroy/{id}', [App\Http\Controllers\PenyakitController::class, 'destroy'])->name('penyakit.destroy');
    });

    //Gejala
    Route::group(['prefix' => '/gejala'], function () {
        Route::get('/', [GejalaController::class, 'index'])->name('gejala');
        Route::get('/create', [GejalaController::class, 'create'])->name('gejala.create');
        Route::post('/store', [GejalaController::class, 'store'])->name('gejala.store');
        Route::get('/edit/{id}', [GejalaController::class, 'edit'])->name('gejala.edit');
        Route::post('/update/{id}', [GejalaController::class, 'update'])->name('gejala.update');
        Route::delete('/destroy/{id}', [GejalaController::class, 'destroy'])->name('gejala.destroy');
    });

    //Relasi
    Route::group(['prefix' => '/rule'], function () {
        Route::get('/', [RuleController::class, 'index'])->name('rule');
        Route::get('/create', [RuleController::class, 'create'])->name('rule.create');
        Route::post('/store', [RuleController::class, 'store'])->name('rule.store');
        Route::get('/edit/{id}', [RuleController::class, 'edit'])->name('rule.edit');
        Route::post('/update/{id}', [RuleController::class, 'update'])->name('rule.update');
        Route::get('/destroy/{id}', [RuleController::class, 'destroy'])->name('rule.destroy');
    });
});

    // profil admin
    Route::resource('profil', ProfilController::class);
    // setting profil
    Route::get('setting', 'ProfilController@setting');
    Route::put('update-password/{id?}', 'LoginController@updatePassword')->name('update-password');


    // profil user
    Route::resource('profil_user', ProfilUserController::class);
    // setting profil
    Route::get('profil_user', 'ProfilUserController@setting');

    //update password
    Route::put('update-password/{id?}', 'LoginController@updatePasswordUser')->name('update-password');
    Route::post('profil_user/store', 'ProfilUserController@store')->name('profil_user.store');
    Route::put('profil_user/update', 'ProfilUserController@update')->name('profil_user.update');


    //LOGIN DAN REGISTRASI USER
    Route::get('registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
    Route::post('simpanregistrasi', [RegisterController::class, 'store'])->name('simpanregistrasi');
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
    Route::get('register', [RegisterController::class, 'register']);
    Route::post('register', [RegisterController::class, 'store']);

    // //LOGOUT
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
