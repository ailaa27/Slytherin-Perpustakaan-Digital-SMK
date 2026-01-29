<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function authenticate(Request $request) {
        if ($request->username == 'admin' && $request->password == 'admin123') {
            session(['login' => true, 'user' => 'Admin']);
            return redirect('/');
        }

        return back()->with('error', 'Username atau password salah');
    }

    public function logout() {
        session()->flush();
        return redirect('/login');
    }
}
