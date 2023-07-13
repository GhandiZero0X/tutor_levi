<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.Index.registrasi', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function submitRegister(Request $request)
    {
        $validatedData = $request->validate([
            'NAMA' => 'required|max:225',
            'NIS' => 'required|unique:mahasiswa',
            'ALAMAT' => 'required|max:225|min:5',
            'EMAIL' => 'required|unique:mahasiswa|max:225|min:5',
            'PASSWORD' => 'required|max:225|min:5',
        ]);
        $validatedData['PASSWORD'] = Hash::make($validatedData['PASSWORD']);

        Mahasiswa::create($validatedData);

        return redirect()->route('index')->with('success', 'Registrasi berhasil. Silakan login.');
    }
}
