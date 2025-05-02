<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        $mahasiswa = [
            'nama' => 'Tedi',
            'nim' => '102022330294',
            'email' => 'abc12@gmail.com',
            'jurusan' => 'Sistem Informasi',
            'fakultas' => 'Rekayasa Industri',
            'foto' => asset('images/halo.jpg')
        ];
        // - Kirim object tersebut ke view 'profil'
        return view('profil', compact('mahasiswa'));
    }
}