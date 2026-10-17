<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;

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
        "title"  =>  "Berita",
        "beritas" => Berita::ambilberita(), 
    ]);
});

Route::get('/kontak', function () {
    return view('kontak',[
        "title"  =>  "Kontak"
    ]);
});

Route::get('/berita/{slug}', function ($slug) { 

    return view('beritatunggal', [
        "title"=> Berita::getTitle($slug),
        "berita" => Berita::getBerita($slug),
    ]);    

});
