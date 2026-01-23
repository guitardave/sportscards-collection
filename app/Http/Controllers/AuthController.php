<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('auth.index', ['title' => 'Login']);
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(auth()->attempt($validated))
            return redirect()->intended('/');
        return back()->with('error', 'The provided credentials do not match our records.');
    }

    public function destroy() {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login')->with('success', 'You have been logged out.');
    }
}
