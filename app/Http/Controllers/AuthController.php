<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect jika berhasil login
            return redirect()->intended('/dashboard');
        }

        // Redirect jika gagal login
        return redirect()->back()->withErrors([
            'email' => 'Email atau NIP dan password tidak sesuai.',
        ]);
    }
}
