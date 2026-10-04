@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Selamat Datang di Sistem Informasi Unpam</h1>
        <p class="text-center">Ini adalah halaman utama dari aplikasi Sistem Informasi Unpam.</p>

        <div class="text-center mt-4">
            <a class="btn btn-success btn-lg" href="{{ url('/profile') }}">Lihat Profile</a>
        </div>
    </div>
@endsection