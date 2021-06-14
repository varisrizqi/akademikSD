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
            'id' => 'required|exists:admins,id',
            'password' => 'required|min:8',
        ],
        [
            'id.required' => "id harus di tambahkan",
            'password.required' => "password harus di tambahkan",
            'id.exists' => "id tidak ditemukan",
            'password.min' => "password harus 8 karakter ",
        ]);

        if (Auth::guard('admin')->attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended('admin');
        }
        // dd(Auth::admin());
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('adminLogin'));
    }
}
