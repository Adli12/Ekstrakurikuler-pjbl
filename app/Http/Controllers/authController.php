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
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // Hindari session fixation attack
            $user = Auth::user();

            if ($user && $user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user && $user->role === 'user') {
                return redirect()->route('user.dashboard');
            } else {
                Auth::logout();
                return redirect('/login')->withErrors(['loginError' => 'Akses tidak diizinkan']);
            }
        }

        return back()->withErrors(['loginError' => 'Username atau password salah']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); // Menghapus sesi
        $request->session()->regenerateToken(); // Mencegah CSRF attack

        return redirect('/');
    }
}
