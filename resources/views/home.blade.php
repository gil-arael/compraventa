@extends('principal')

@section('contenido')
<main class="main">
   
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="/">BACKEND - SISTEMA DE COMPRAS - VENTAS</a></li>
    </ol>
    <div class="container-fluid">
        Hola!!  {{Auth::user()->usuario}}
    </div>
</main>

 
@endsection