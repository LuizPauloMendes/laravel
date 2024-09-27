<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    private $objUser;
    
    public function __construct()
    {
        $this->objUser = new User();
    }
    
    public function index()
    {
        return view('login');
    }
    
    public function create()
    {
        $users = $this->objUser->all();
        return view('register', compact('users'));
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        $name = $validatedData['name'];
        $email = $validatedData['email'];
        $password = Hash::make($validatedData['password']);
       

        $user = $this->objUser->create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);
        $user->save();

        if ($user) {
            return redirect('/login')->with('success', 'Usuário registrado com sucesso.');
        } else {
            return redirect()->back()->with('error', 'Falha ao registrar o usuário. Tente novamente.');
        }
    }
    
    public function store(Request $request)
    {
        $credentials = $request->only('email', 'password');

        
        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            
            Auth::login($user); 
            return redirect()->intended('/home');
        } else {
            // Falha na autenticação, redireciona de volta com erro
            return redirect()->back()->withErrors([
                'email' => 'Credenciais incorretas.',
            ]);
        }
    }
    
}


