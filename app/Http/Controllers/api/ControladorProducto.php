<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\ModeloProducto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ControladorProducto extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = DB::table('productos')
            ->join('categorias', 'productos.id_categoria', '=', 'categorias.id')
            ->select('productos.*', "categorias.nombre as nombreCategoria")->get();
        return json_encode(['productos' => $productos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new ModeloProducto();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->id_categoria = $request->id_categoria;
        $producto->id = $request->id;
        $producto->save();
        return json_encode(['producto' => $producto]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = ModeloProducto::find($id);
        $categorias = DB::table('categorias')
            ->orderBy('nombre')
            ->get();
        return json_encode(['producto' => $producto, "categorias" => $categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = ModeloProducto::find($id);
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->cantidad = $request->cantidad;
        $producto->id_categoria = $request->id_categoria;
        $producto->id = $request->id;
        $producto->save();
        return json_encode(['producto' => $producto]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = ModeloProducto::find($id);
        $producto->delete();

        $productos = ModeloProducto::all();
        return json_encode(['productos' => $productos, 'success' => true]);
    }
}