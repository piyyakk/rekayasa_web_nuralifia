@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">About</h1>

    <div class="card mx-auto" style="max-width: 700px;">
        <div class="card-body">
            <h5 class="card-title">Sistem Informasi - UNPAM</h5>
            <p class="card-text">
                Website ini dibuat sebagai latihan Laravel, mencakup routing,
                Blade layout, dan pemisahan komponen header dan footer
                menggunakan partials.
            </p>
            <ul>
                <li>Framework: Laravel</li>
                <li>Tampilan: Bootstrap</li>
                <li>Template: Blade</li>
            </ul>
        </div>
    </div>

    <div class="text-center mt-4">
        <a class="btn btn-primary" href="{{ url('/') }}">Kembali ke Home</a>
    </div>
</div>
@endsection