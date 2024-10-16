<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    private $objContato;

    public function __construct()
    {
        $this->objContato = new Contato();
    }

    // Display the contact form
    public function index()
    {
        return view('contato'); // Assuming there's no need to pass existing contatos
    }

    // Handle the form submission
    public function register(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contatos,email', // Changed from users to contatos
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

        // Create a new contato record
        Contato::create($validatedData);

        // Redirect back with a success message
        return redirect()->route('home')->with('message', 'Your message has been sent!');
    }

    // Store method is not necessary in this context; you can remove it
    // If you need it, here is an example to fetch stored contacts
    public function store()
    {
        $contatos = Contato::all(); // Fetch all contatos from the database
        return view('contato');

}
}