<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
        public function showLoginForm()
    {
        return view('auth.login');
    }

     public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, redirect ke halaman setelah login
            return redirect()->intended('/dashboard');
        }

        // Jika autentikasi gagal, kembali ke halaman login dengan pesan error
        return redirect()->back()->withErrors(['username' => 'Username atau password salah']);
    }
    

}
