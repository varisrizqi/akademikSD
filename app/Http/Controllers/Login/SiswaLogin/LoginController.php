<?php

namespace App\Http\Controllers\Login\SiswaLogin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.siswaLogin.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'nipdn' => 'required|exists:siswa,nipdn',
            'password' => 'required|min:8',
        ],
        [
            'nipdn.required' => "nipdn harus di tambahkan",
            'password.required' => "password harus di tambahkan",
            'nipdn.exists' => "nipdn tidak ditemukan",
            'password.min' => "password harus 8 karakter ",
        ]);

        if (Auth::guard('siswa')->attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended('siswa');
        }

        return back()->withErrors([
            'id' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('siswaLogin'));
    }
}
