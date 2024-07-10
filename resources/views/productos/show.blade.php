@extends('layouts.app')

@section('titulo', 'Detalle Pedido')

@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($product->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <h5 class="card-title"> {{$product->nombre}}</h5>
        <br>
        <p class="card-text">Descripción: {{$product->descripcion}}</p>
        <p class="card-text">Cantidad: {{ $product->cantidad }}</p>
        <p class="card-text">Precio: {{ $product->precio }}</p>

    </div>
    <br>
    <a href="/cursos/{{$product->id}}/edit" class="btn btn-warning">Editar curso</a>
    {{-- <a href="/cursos/{{$pedido->id}}/edit" class="btn btn-dark">Editar curso</a> --}}
</div>

@endsection
