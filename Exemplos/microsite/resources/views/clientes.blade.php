@extends('layouts.master')

@section('titulo')
Clientes
@endsection

@section('conteudo')
    <h1 style="text-align:center">Página de clientes!</h1>
    <h2>Esses são os nossos melhores clientes</h2>
    <ul class="clientes">
        
        @foreach($clientes as $c)
            <li>{{$c}}</li>
        @endforeach
    </ul>
<marquee style="color:red;font-size:3vw">Nosso cliente do mês é {{$clienteDoMes}}</marquee>
<span>Site feito por {{ $oCara }}</span>

@endsection