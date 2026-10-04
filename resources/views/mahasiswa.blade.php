@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Profile Mahasiswa</h1>
        <div class="card mx-auto justify-content-center" style="max-width: 400px;">
            <div class="card-header">
                <center>
                    <img src="https://lh3.googleusercontent.com/d/1cszYA-XlFmL82XuqasK0sl_8CyFkGDx4" alt="Foto Mahasiswa" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
                <h1 class="card-title mt-3">{{ $mahasiswa[0]['nama'] }}</h1>
                <div class="card-body">
                    <p class="card-text"><strong>NIM:</strong> {{ $mahasiswa[0]['nim'] }}</p>
                    <p class="card-text"><strong>Jurusan:</strong> {{ $mahasiswa[0]['prodi'] }}</p>
                    <p class="card-text"><strong>Email:</strong> {{ $mahasiswa[0]['email'] }}</p>
                    <p class="card-text"><strong>Kampus:</strong> {{ $mahasiswa[0]['kampus'] }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
