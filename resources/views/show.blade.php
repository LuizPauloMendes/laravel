@section('content')
<h1>Visualizar</h1> <hr>

<div>
@php
  $user=$book->find($book->id)->relUsers;
@endphp
      Titulo: {{ $book->title }} <br>
      Páginas: {{ $book->pages }} <br>
      Preço: {{ $book->price }} <br>
      Autor: {{ $user->name }} <br>
      Email do autor: {{ $user->email }} <br>
</div>
@endsection