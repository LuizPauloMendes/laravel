@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div>
    <h1>Livraria</h1>
</div>
<div>
@if(count(books)>0)
@else
<p>erro</p>
@endif
</div>

@endsection