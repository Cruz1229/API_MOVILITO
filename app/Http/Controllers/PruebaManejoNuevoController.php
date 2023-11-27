<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PruebaManejoNuevo;

class PruebaManejoNuevoController extends Controller
{
    public function index()
    {
        $pruebas = PruebaManejoNuevo::all();
        return response()->json($pruebas);
    }

    public function show($id)
    {
        $prueba = PruebaManejoNuevo::find($id);
        return response()->json($prueba);
    }

    public function store(Request $request)
    {
        $prueba = PruebaManejoNuevo::create($request->all());
        return response()->json($prueba, 201);
    }

    public function update(Request $request, PruebaManejoNuevo $prueba)
    {
        $prueba->update($request->all());
        return response()->json($prueba, 200);
    }

    public function destroy(PruebaManejoNuevo $prueba)
    {
        $prueba->delete();
        return response()->json(null, 204);
    }
}
