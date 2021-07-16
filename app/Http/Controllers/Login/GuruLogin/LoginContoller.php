<?php

namespace App\Http\Controllers\Login\GuruLogin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginContoller extends Controller
{
    public function index()
    {
        return view('login.guruLogin.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'nip' => 'required|exists:guru,nip',
            'password' => 'required|min:8',
        ],
        [
            'nip.required' => "nip harus di tambahkan",
            'password.required' => "password harus di tambahkan",
            'nip.exists' => "nip tidak ditemukan",
            'password.min' => "password harus 8 karakter ",
        ]);

        if (Auth::guard('guru')->attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended('guru');
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

        return redirect(route('guruLogin'));
    }
}
