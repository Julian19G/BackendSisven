<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\ModeloMetodoPago;
use Illuminate\Http\Request;

class ControladorMetodoPago extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $metodos = ModeloMetodoPago::all();
        return json_encode(['metodos' => $metodos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $metodo = new ModeloMetodoPago();
        $metodo->id = $request->id;
        $metodo->nombre = $request->nombre;
        $metodo->observacion = $request->observacion;
        $metodo->save();
        return json_encode(['metodo' => $metodo]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $metodo = ModeloMetodoPago::find($id);
        return json_encode(['metodo' => $metodo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $metodo = ModeloMetodoPago::find($id);
        $metodo->id = $request->id;
        $metodo->nombre = $request->nombre;
        $metodo->observacion = $request->observacion;
        $metodo->save();
        return json_encode(['metodo' => $metodo]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $metodo = ModeloMetodoPago::find($id);
        $metodo->delete();

        $metodos = ModeloMetodoPago::all();
        return json_encode(['metodos' => $metodos, 'success' => true]);
    }
}