@extends('layouts.app')

@section('titulo', 'Crear Producto')

@section('contenido')

<br>
    <h3>Crear un nuevo curso</h3>
    <form action="/productos" method="POST">
        @csrf
        <div class="mb-3">
          <label for="nombreproducto" class="form-label">Nombre del producto</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio">
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>

@endsection
