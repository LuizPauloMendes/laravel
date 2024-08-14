@extends('template')
@section('content')
@extends('layouts.main')
<h1>CRUD</h1>
@csrf
<div>
  <a href="{{ url('books/create') }}">
    <button>Cadastrar</button>
  </a>
<table class="table" style="width:auto">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">titulo</th>
      <th scope="col">preço</th>
      <th scope="col">autor</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

  @foreach ($book as $books)
  @php
      $user=$books->find($books->id)->relUsers;
  @endphp
      <tr>
      <td>{{ $books->id }}</td>
      <td>{{ $books->title }}</td>
      <td>{{ $books->price }}</td>
      <td>{{ $user->name }}</td>
    </div>
    <div class="btn-group">
    <td>
      <a href="{{ url("books/$books->id/edit") }}">
          <button class="btn btn-dark" style="float: left">Editar</button>
      </a>
      <a href="{{ url("books/$books->id") }}">
          <form action={{route('books-destroy', ['id'=>$books->id]) }} method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" style="float: right" type="submit">Apagar</button>
      </a>
      </td>
      </tr>
      </div>
     @endforeach
  </tbody>
 
</table>

</body>
