<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Producto::all(); //Traer toda la informacion de la tabla producto
        return view('productos.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("productos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Producto();
        $product->nombre = $request->input("nombre");
        $product->precio = $request->input("precio");
        $product->cantidad = $request->input("cantidad");
        $product->descripcion = $request->input("descripcion");
        if($request->hasfile('imagen')){
            $product->imagen = $request->file('imagen')->store('public/cursos');
        }
        $product->save();

        return "Guardado con exito";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Producto::find($id);
        return view('productos.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
