<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class MahasiswaMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::guard()->guest()) {
            return redirect()->route('index')->with('error', 'Anda harus login sebagai mahasiswa.');
        }

        $user = Auth::user();

        if (!$user || !$user instanceof \App\Models\Mahasiswa) {
            return redirect()->route('index')->with('error', 'Anda harus login sebagai mahasiswa.');
        }

        return $next($request);
    }
}