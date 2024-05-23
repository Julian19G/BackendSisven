<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\ModeloCliente;
use Illuminate\Http\Request;

class ControladorCliente extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = ModeloCliente::all();
        return json_encode(['clientes' => $clientes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new ModeloCliente();
        $cliente->numero_documento = $request->numero_documento;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->direccion = $request->direccion;
        $cliente->cumpleaños = $request->cumpleaños;
        $cliente->celular = $request->celular;
        $cliente->id = $request->id;
        $cliente->correo = $request->correo;
        $cliente->save();

        return json_encode(['cliente' => $cliente]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente = ModeloCliente::find($id);

        return json_encode(['cliente' => $cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = ModeloCliente::find($id);
        $cliente->numero_documento = $request->numero_documento;
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->direccion = $request->direccion;
        $cliente->cumpleaños = $request->cumpleaños;
        $cliente->celular = $request->celular;
        $cliente->id = $request->id;
        $cliente->correo = $request->correo;
        $cliente->save();

        return json_encode(['cliente' => $cliente]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente = ModeloCliente::find($id);
        $cliente->delete();

        $clientes = ModeloCliente::all();
        return json_encode(['clientes' => $clientes, 'success' => true]);
    }
}