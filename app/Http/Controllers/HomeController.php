<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function map()
    {
        return view ('map');
    }
    public function chatbot()
    {
        return view ('chatbot');
    }
    public function reviews()
    {
        return view ('reviews');
    }
}
