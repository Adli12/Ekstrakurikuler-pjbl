<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class authController extends Controller
{
    public function showloginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role === 'user') {
                return redirect()->route('user.dashboard');
            } else {
                Auth::logout();
                return redirect('/login')->withErrors(['loginError' => 'Akses tidak diizinkan']);
            }
        }
        return back()->withErrors(['loginError' => 'Username atau password salah']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
