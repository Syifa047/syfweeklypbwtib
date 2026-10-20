<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

Route::get('/', function () {
    return view('home', [
        "title"  =>  "Home"
    ]);
});

Route::get('/profile', function () {

    return view('profile', [
        "title" => "Profile",
        "nama" => "syifa maulida",
        "nim" => "3242520047",
        "prodi" => "teknologi informasi",
        "gambar" => "image"
    ]);

});

Route::get('/berita', [BeritaController::class, 'tampilberita']);

Route::get('/kontak', function () {
    return view('kontak',[
        "title"  =>  "Kontak"
    ]);
});

Route::get('/berita/{slug}', [BeritaController::class, 'getBerita']);
