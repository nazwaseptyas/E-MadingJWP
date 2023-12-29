<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Menampilkan halaman login
    public function login(){
        return view('login');
    }

    public function loginuser(Request $request)
    {
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ], [
        'email.required' => 'Email wajib diisi',
        'password.required' => 'Password wajib diisi',
    ]);

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials, $request->remember)) {
    return redirect('/admin'); 
    } else {
    return redirect('login')->withErrors('Email dan password yang dimasukkan tidak sesuai')->withInput();
    }

    }

    // Keluar akun
    public function logout(){
            Auth::logout();
            return redirect('login');
        }

    }