<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login.auth.login');
    }

    public function login(Request $request)
    {
        $syarat = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Masukkan email yang valid',
            'email.email' => 'Wajib menggunakan email',
            'password.required' => 'Masukkan Password anda',
        ]);

        if (Auth::attempt($syarat)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()
            ->withErrors([
                'email' => 'Email atau password salah'
            ])
            ->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }

}
