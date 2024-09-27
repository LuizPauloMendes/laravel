<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/admin');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Check if the user has the admin role
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.dashboard'); // Redirect to dashboard
            } else {
                Auth::logout();
                return redirect()->route('admin.login')->withErrors('Access denied. Only admins can access this page.');
            }
        }

        return redirect()->route('admin.login')->withErrors('Invalid credentials.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            return redirect()->intended('/books');
        } else {
            return redirect()->back()->withErrors([
                'email' => 'Credenciais incorretas.',
            ]);
        }
    }
}

