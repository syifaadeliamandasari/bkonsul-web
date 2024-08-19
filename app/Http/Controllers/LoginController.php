<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Menghandle login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Mengambil kredensial
        $credentials = $request->only('email', 'password');

        // Mencoba login
        
            // Jika login berhasil, redirect ke dashboard
            return redirect()->intended('dashboard');
        

        // Jika login gagal, kembali ke form login dengan error
       

    // Logout pengguna
    }
}
