@section('content')
@extends('layouts.main')
<h1>@if(isset($book))EDITAR @else CADASTRAR @endif</h1><hr>

<div>
@if(isset($book))
  <form id="formEdit" method="post" action="{{ url("books/$book->id") }}">
  @method('PUT')

@else
  <form id="formCad" method="post" action="{{ url('books') }}">

@endif
  @csrf
  <input type="text" name="title" id="title" placeholder="Título: " value="{{ $book->title ?? '' }}"><br>
  <select name="id_user" id="id_user"><br>
  <option value="">{{ $book->relUsers->id ??'' }}</option>
  @foreach($users as $user)
    <option value="{{ $user->id }}">{{ $user->name }}</option>
  @endforeach
  </select><br>
  <input type="text" name="pages" id="pages" placeholder="Páginas: " value="{{ $book->pages ?? '' }}"><br>
  <input type="text" name="price" id="price" placeholder="Preço: " value="{{ $book->price ?? '' }}"><br>
  <input type="submit" value="@if(isset($book))EDITAR @else CADASTRAR @endif">
  </form>
  <style>
    .table, th, td{
        border-collapse:collapse;
        padding: 10px;
        text-align: left;
        border: 1px solid rgb(160 160 160);

        
    }
</style>
</table>
</div>
