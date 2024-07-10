@extends('layouts.app')

@section('titulo', 'Listado pedido')

@section('contenido')
<br>
<h3 class="text-center">Listado de pedidos</h3>
<br>
<div class="row">
    @foreach ($product as $pedido )
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($pedido->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $pedido->nombre }}</h5>
                  <p class="card-text">{{ $pedido->cantidad }}</p>

                  <a href="/productos/{{$pedido->id}}" class="btn btn-success">Ver detalles</a>
                </div>
            </div>
        </div>

    @endforeach

</div>

@endsection



