<?php

namespace App\Http\Controllers;

use App\Models\InventarioNuevos;
use App\Mail\testMail;
use Mail;
use Illuminate\Http\Request;

class InventarioNuevosController extends Controller
{
    public function index()
    {
        $nuevo = InventarioNuevos::all();
        return response()->json($nuevo);
    }

    public function store(Request $request)
    {
        $nuevo = InventarioNuevos::create($request->all());
        return response()->json($nuevo, 201);
    }

    public function show($idNuevo)
    {
        $nuevo = InventarioNuevos::find($idNuevo);

        if (!$nuevo) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        return response()->json($nuevo);
    }

    public function update(Request $request, $idNuevo)
    {
        // Validar los datos de entrada
        $request->validate([
            'bajo' => 'required',
            'medio' => 'required',
            'alto' => 'required'
            // Agrega reglas de validación para otros campos aquí
        ]);

        // Buscar el registro que deseas actualizar
        $registro = InventarioNuevos::find($idNuevo);

        if (!$registro) {
            return response()->json(['message' => 'Registro no encontrado'], 404);
        }

        // Actualizar los campos del registro
        $registro->bajo = $request->input('bajo');
        $registro->medio = $request->input('medio');
        $registro->alto = $request->input('alto');
        // Actualiza otros campos aquí

        // Guardar los cambios en la base de datos
        $registro->save();

        return response()->json(['message' => 'Registro actualizado con éxito']);
    }

    public function destroy(InventarioNuevos $nuevo)
    {
        $nuevo->delete();
        return response()->json(null, 204);
    }

    public function obtenerPorAno($ano)
    {
        $productos = InventarioNuevos::where('ano', $ano)->get();

        return response()->json($productos);
    }

    public function getMail()
    {
        $data = ['name' => 'David'];
        Mail::to('crecencio0609@gmail.com')->send(new testMail($data));
    }
}
