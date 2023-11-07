<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'placa' => 'required|string|max:10',
            'color' => 'required|string|max:20',
            'marca' => 'required|string|max:50',
            'tipo' => 'required|string',
            'conductor' => 'required|integer',  // Asegúrate de que sea un número entero
            'propietario' => 'required|integer', // Asegúrate de que sea un número entero
        ]);

        // Crea un nuevo vehículo y asigna los valores
        $vehiculo = new Owner;
        $vehiculo->placa = $request->input('placa');
        $vehiculo->color = $request->input('color');
        $vehiculo->marca = $request->input('marca');
        $vehiculo->tipo = $request->input('tipo');
        $vehiculo->conductor = $request->input('conductor');
        $vehiculo->propietario = $request->input('propietario');

        // Guarda el vehículo en la base de datos
        $vehiculo->save();

        // Puedes retornar una respuesta JSON u otra respuesta apropiada
        return response()->json(['message' => 'Vehículo registrado con éxito']);
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
