<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $isAuthenticated = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if ($isAuthenticated) {
            return redirect()->route('home');
        }

        return redirect()->route('login')
            ->withErrors('Email ou senha incorretos');
    }

    public function logout(Request $request)
    {
        auth('web')->logout();

        $request->session()->invalidate();

        return redirect()->route('login');
    }
}
