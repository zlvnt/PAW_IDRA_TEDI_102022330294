<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Set timezone ke Asia/Jakarta
        // - Buat variabel nama, jam, waktu
        // - Tentukan $salam berdasarkan jam (pagi, siang, sore, malam)
        // - Panggil fungsi getTanggal()
        // - Kirim data ke view 'dashboard' 
        date_default_timezone_set('Asia/Jakarta');
        $nama = 'Tedi';
        $jam = date('H:i:s');
        $hour = date('H');
        if ($hour >= 5 && $hour < 12) {
            $salam = "Selamat Pagi";
        } elseif ($hour >= 12 && $hour < 15) {
            $salam = "Selamat Siang";
        } elseif ($hour >= 15 && $hour < 18) {
            $salam = "Selamat Sore";
        } else {
            $salam = "Selamat Malam";
        }
        $tanggal = $this->getTanggal();
        return view('dashboard', compact('salam', 'nama', 'jam', 'tanggal'));
    }
    
    private function getTanggal()
    {
        // ==================3==================
        // - Kembalikan tanggal sekarang dalam format dd-mm-yyyy
        return date('d-m-Y');       
    }
}
