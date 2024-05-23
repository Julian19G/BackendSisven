<?php


namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\ModeloCategoria;
use Illuminate\Http\Request;

class ControladorCategoria extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = ModeloCategoria::all();
        return json_encode(['categorias' => $categorias]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categoria = new ModeloCategoria();
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->id = $request->id;
        $categoria->save();
        return json_encode(['categoria' => $categoria]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categoria = ModeloCategoria::find($id);
        return json_encode(['categoria' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $categoria = ModeloCategoria::find($id);
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->id = $request->id;
        $categoria->save();
        return json_encode(['categoria' => $categoria]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categoria = ModeloCategoria::find($id);
        $categoria->delete();

        $categorias = ModeloCategoria::all();
        return json_encode(['categorias' => $categorias, 'success' => true]);
    }
}