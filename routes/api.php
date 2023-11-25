<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioNuevosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'nuevos'], function () {
    Route::get('/', [InventarioNuevosController::class, 'index']); // Obtener todas las fincas
    Route::post('/', [InventarioNuevosController::class, 'store']); // Crear una nueva finca
    Route::get('/{idNuevo}', [InventarioNuevosController::class, 'show']); // Obtener una finca específica
    Route::put('/{idNuevo}', [InventarioNuevosController::class, 'update']); // Actualizar una finca específica
    Route::delete('/{idNuevo}', [InventarioNuevosController::class, 'destroy']);
});
