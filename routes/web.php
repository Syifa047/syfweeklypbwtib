<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/berita', function () {
    return view('berita',[
        "title"  =>  "Berita"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak',[
        "title"  =>  "Kontak"
    ]);
});