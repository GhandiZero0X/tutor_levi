<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\Mahasiswa;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.Index.login', [
            'title' => 'Login'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('index')->with('success', 'Anda telah berhasil logout.');
    }
    

    public function submitLogin(Request $request)
    {
        $credentials = $request->validate([
            'EMAIL' => 'required|email:dns',
            'PASSWORD' => 'required|min:5',
        ]);

        $user = Mahasiswa::where('EMAIL', $credentials['EMAIL'])->first();

        if ($user && Hash::check($credentials['PASSWORD'], $user->PASSWORD)) {
            Auth::login($user);
            $request->session()->regenerate();

            return redirect()->route('home')->with('success', 'Login berhasil.');
        }

        throw ValidationException::withMessages([
            'email' => 'Email atau password salah.',
        ]);
    }
}

