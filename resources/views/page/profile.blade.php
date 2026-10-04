@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Profile Mahasiswa</h1>

    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-body">
            <table class="table table-borderless mb-0">
                <tr>
                    <th style="width: 35%;">Nama</th>
                    <td>: Nama Kamu</td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td>: 12345678</td>
                </tr>
                <tr>
                    <th>Program Studi</th>
                    <td>: Sistem Informasi</td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>: 03SIFM003</td>
                </tr>
                <tr>
                    <th>Universitas</th>
                    <td>: UNPAM</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="text-center mt-4">
        <a class="btn btn-primary" href="{{ url('/') }}">Kembali ke Home</a>
    </div>
</div>
@endsection