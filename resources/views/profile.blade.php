@extends('layouts.main')

@section('content')
    <h1>PROFILE</h1>
    <p>nama    : {{$nama}}</P>
    <p>nim     : {{ $nim }}</P>
    <p>prodi   : {{ $prodi }}</p>
    <img src="/image/Hirono.png"
     alt="Foto Syifa"
     width="200"
     class="rounded-circle mb-3">


    <script src="js/alert.js"></script>
@endsection