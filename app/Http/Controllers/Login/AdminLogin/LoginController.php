<?php

namespace App\Http\Controllers\Login\AdminLogin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.adminLogin.login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'nuptk' => 'required|exists:admins,nuptk',
            'password' => 'required|min:8',
        ],
        [
            'nuptk.required' => "nuptk harus di tambahkan",
            'password.required' => "password harus di tambahkan",
            'nuptk.exists' => "nuptk tidak ditemukan",
            'password.min' => "password harus 8 karakter ",
        ]);

        if (Auth::guard('admin')->attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended('admin');
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

        return redirect(route('adminLogin'));
    }
}
