<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarioNuevosController;
use App\Http\Controllers\PruebaManejoNuevoController;

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
    Route::get('/', [InventarioNuevosController::class, 'index']);
    Route::post('/', [InventarioNuevosController::class, 'store']);
    Route::get('/{idNuevo}', [InventarioNuevosController::class, 'show']);
    Route::put('/{idNuevo}', [InventarioNuevosController::class, 'update']);
    Route::delete('/{idNuevo}', [InventarioNuevosController::class, 'destroy']);
    Route::get('/inventario/{ano}', [InventarioNuevosController::class, 'obtenerPorAno']);
});

Route::group(['prefix' => 'pruebanuevos'], function () {
    Route::get('/', [PruebaManejoNuevoController::class, 'index']);
    Route::post('/', [PruebaManejoNuevoController::class, 'store']);
    Route::get('/{idPrueba}', [PruebaManejoNuevoController::class, 'show']);
    Route::put('/{idPrueba}', [PruebaManejoNuevoController::class, 'update']);
    Route::delete('/{idPrueba}', [PruebaManejoNuevoController::class, 'destroy']);
});