<?php

use App\Http\Controllers\LoginController;
// use App\Http\Controllers\PengetahuanController;
use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\ArtikelController;
// use App\Http\Controllers\GejalaController;
// use App\Http\Controllers\PenyakitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::get('/admin', function () {
        return view('admin.dashboard.index');
    });

});

Route::group(['middleware' => ['auth', 'ceklevel:user']], function () {
    Route::get('/konsultasi', 'KonsultasiController@create');
});

Route::get('/infopenyakit', 'PenyakitController@infoPenyakit');

Route::get('/register', function () {
    return view('admin.auth.register');
});


    Route::get('/', function () {
        return view('user.home');
    });

    Route::get('/kontak', function () {
        return view('user.kontak');
    });

    Route::get('/tentang', function () {
        return view('user.tentang');
    });

    // Route::get('/infopenyakit', function () {
    //     return view('user.infopenyakit');
    // });

    Route::get('/infogejala', function () {
        return view('user.infogejala');
    });



    // Route::get('/konsultasi', function () {
    //     return view('user.konsultasi');
    // });

    // Route::get('/konsultasi', function () {
    //     return view('user.konsultasi');
    // });

//CRUD
 Route::resource('artikel', ArtikelController::class);
//  Route::get('artikel', [ArtikelController::class, 'index']);
 Route::resource('penyakit', PenyakitController::class);
//  Route::get('penyakit', [PenyakitController::class, 'index']);
 Route::resource('gejala', GejalaController::class);
//  Route::get('gejala', [GejalaController::class, 'index']);
Route::resource('pengetahuan', PengetahuanController::class);

 //LOGIN DAN REGISTRASI
 Route::get('registrasi', [LoginController::class, 'registrasi'])->name('registrasi');
 Route::post('simpanregistrasi', [RegisterController::class, 'store'])->name('simpanregistrasi');
 Route::get('login', [LoginController::class, 'index'])->name('login');
 Route::post('postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
 Route::get('register', [RegisterController::class, 'register']);
 Route::post('register', [RegisterController::class, 'store']);

 //LOGOUT
 Route::get('logout', [LoginController::class, 'logout'])->name('logout');

// Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
//     Route::get('/admin', function () {
//         return view('admin.dashboard.index');
//     });

// });


// Route::post('/konsultasi', 'KonsultasiController@store');
