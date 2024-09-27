<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function auth(Request $request){
        $data = $request->all();

        if(Auth::attempt(['email' =>$data['email'], 'password' => $data['password']])){
            return redirect ('/');
        }else{
            return redirect ('/');
        }
    }
}
