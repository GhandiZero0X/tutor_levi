<?php

namespace App\Http\Controllers;

use App\Models\Pengingat;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function index()
    {
        $pengingat = Pengingat::with('jadwalHarian')->get();
        $mahasiswa = Mahasiswa::first(); // Ambil data mahasiswa yang sesuai, atau sesuaikan dengan logika bisnis Anda

        return view('pages.users.notifikasi', [
            'title' => 'Notifikasi',
            'pengingat' => $pengingat,
            'namaUser' => $mahasiswa->NAMA // Tambahkan data namaUser ke dalam array yang dikirim ke view
        ]);
    }
}
