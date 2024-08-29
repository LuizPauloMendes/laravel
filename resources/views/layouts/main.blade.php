@extends('template')
@section('content')
<title>@yield('title')</title>
@csrf
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
</head>
<body>
 @yield('content')
  <style>
    .table, tr, td{
        
        padding: 10px;
        text-align: center;
  
        table-layout: fixed; 
        margin: auto;
    }
    body{
        text-align:center;
    }
    
    input[type=text], input[type=password], input[type=email], select {
  border-radius: 10px;
  width: 25%;
  padding: 6px 10px;
  margin: 5px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
    }
    .button {
  border-radius: 10px;
  color: auto;
  padding: 5px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: auto;
  font-size: auto;
    }
</style>
 </body>

