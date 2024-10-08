<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelBook;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Laravel\Auth;
use Termwind\Components\Raw;

class BookController extends Controller
{
    private $objUser;
    private $objBook;

    public $timeout = 15;
    public $failOnTimeout = true;
    public $maxExceptions = 1;

    public function __construct()
    {
        $this->objUser=new User();
        $this->objBook=new ModelBook();

    }
    public function index()
    {
        $book=$this->objBook->all()->sortBy('id');
        return view('index',compact('book'));
        $user=$this->objUser->all()->sortBy('title');
    }

    public function create()
    {
        $users=$this->objUser->all();
        return view('create', compact('users'));
    }

    public function store(Request $request)
    {
        $cad=$this->objBook->create([
            'title'=>$request->title,
            'price'=>$request->price,
            'image'=>$request->image,
        ]);
      if($request->hasFile('image') && $request->image->isValid()){
        flush();
        $imagePath = $request->image->store('books');
        $data['image'] = $imagePath;
      }

        if($cad){
            return redirect('books');
        }
    }

    public function edit($id)
    {
        $book=$this->objBook->find($id);
        $users=$this->objUser->all();
        return view('create',compact('book', 'users'));
    }

    public function update(Request $request, $id)
    {
        $this->objBook->where(['id'=>$id])->update([
            'title'=>$request->title,
            'price'=>$request->price,
        ]);
        return redirect ('books');
    }

    public function destroy(Request $delete, $id)
    {
        $book=$this->objBook->findOrFail($id)->delete();
        return redirect ('books');
    }
    public function show($id)
    {
        $book=$this->objBook->find($id);
        return view('show',compact('book'));
    }
 
    public function pedido()
    {
        $book=$this->objBook->all()->sortBy('id');
        return view('pedido',compact('book'));
        $user=$this->objUser->all()->sortBy('title');
    }
    
}
