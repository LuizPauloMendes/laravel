<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        return view('star');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255', // Validação para o campo 'name'
        'rating' => 'required|integer|min:1|max:5',
    ]);

    // Salvando a avaliação
    Review::create([
        'name' => $validatedData['name'],
        'rating' => $validatedData['rating'],
        'comment' => $request->comment,
    ]);

    return redirect()->back()->with('success', 'Avaliação enviada com sucesso!');
}
public function showReviews()
{
    $reviews = Review::all(); // Pega todas as avaliações
    return view('reviews', compact('reviews')); // Retorna a view com as avaliações
}
}
