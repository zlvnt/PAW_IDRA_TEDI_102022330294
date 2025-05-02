@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Profil Mahasiswa</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <div class="mb-3">
                <!-- ==================4================== -->
                <!-- Tambahkan foto ke public/images, lalu tentukan pathnya -->
                <img src="{{ asset('images/halo.jpg') }}" alt="Foto Profil" class="img-thumbnail rounded-circle" width="150">
            </div>
            <!-- ==================5================== -->
            <!-- Buat file tampilan yang akan menampilkan data mahasiswa dalam bentuk tabel. -->
            <!-- Gunakan tag <tr>, <th> dan <td> untuk baris dan kolom. -->
            <tr>
                <th>nama</th>
                <td>{{ $mahasiswa['nama'] }}</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>{{ $mahasiswa['nim'] }}</td>
            </tr>
            <tr>
                <th>Program Studi</th>
                <td>{{ $mahasiswa['jurusan'] }}</td>
            </tr>
            <tr>
                <th>Fakultas</th>
                <td>{{ $mahasiswa['fakultas'] }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $mahasiswa['email'] }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection
