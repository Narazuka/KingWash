<?php

namespace App\Http\Controllers;

use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'tittle' => 'Login',
            'active' => 'login'
        ]);
    }

    public function home()
    {
        return view('admin.dashboard' , [
            'tiitle' => 'dashboard'
        ]);
    }

    public function authenticate(Request $request)
    {
        $admin = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($admin)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('LoginError','Login Gagal!');
    }
    
    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}
