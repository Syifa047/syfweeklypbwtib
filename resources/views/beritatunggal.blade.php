@extends('layouts.main')

@section('content')
    <div class="text-center">
        <h2>{{ $berita["Judul"] }}</h2>
        <h5>{{ $berita["Penulis"] }}</h5>
    </div>  
    <div class="text-justify">
        <p>{{ $berita["Konten"] }}</p>
        
    </div> 

    <a href="/berita">kembali</a>
@endsection