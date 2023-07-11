<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class LoginController extends Controller
{
     public function showLoginForm()
    {
        return view('auth.login');
    }
    
    // public function login(Request $request)
    // {
        
    //     $credentials = $request->validate([
    //         'username' => ['required'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials)) {
            
    //         $user = Auth::user();

    //         // Update kolom last_login dengan waktu saat ini
    //         $user->last_login = Carbon::now();
    //         $user->save();

    //         // Redirect ke halaman dashboard atau halaman yang sesuai
    //         return redirect('/user');
    //     } else {
    //         // Jika autentikasi gagal, redirect kembali ke halaman login dengan pesan error
    //         return redirect()->route('login')->with('error', 'Username atau password salah');
    //     }
    // }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->level == 'admin') {
                return redirect()->intended('/dashboard');
            } elseif (Auth::user()->level == 'pegawai') {
                return redirect()->intended('/dashboard_pegawai');
            }
        }
        return back()->withErrors([
            'loginError' => 'Wrong username or password',
        ]);
    }

    // public function logout(Request $request)
    // {
    //     Auth::logout();

    //     return redirect()->route('login')->with('success', 'Anda telah berhasil logout.');
    // }
}
