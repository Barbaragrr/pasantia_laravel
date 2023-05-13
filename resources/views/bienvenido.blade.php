@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <title>Document</title>
</head>
<body>
   <div class="welcome center">   
    <p>Bienvenido! En esta pagina podras visualizar documentos de la division de ingenieria industrial de la empresa CVG Venalum.</p>     
    <a href="./register" class="btn btn-success">Registrate!</a>

   </div>
</body>
</html>
@endsection