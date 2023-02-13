<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // menampilkan halaman login
    public function index()
    {
        return view('auth.login');
    }

    // memproses login
    public function login(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect()->route('todo.index');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('login');
        }
    }

    // memproses logout
    public function logout ()
    {
        Auth::logout();
        return redirect('login');
    }
}
