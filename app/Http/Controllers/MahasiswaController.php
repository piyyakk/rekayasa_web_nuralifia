<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            [
                'nama' => 'Fithran Fuadi',
                'nim' => '251011700556',
                'prodi' => 'Sistem Informasi',
                'kampus' => 'Universitas Pamulang',
                'email' => 'fithran.fuadi@example.com',
                'status' => 'Aktif',
            ],
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}