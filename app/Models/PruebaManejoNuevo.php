<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PruebaManejoNuevo extends Model
{
    use HasFactory;
    protected $table = 'pruebamanejonuevos';
    protected $primaryKey = 'idPruebaManejoNuevo';
    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'apellidos',
        'correo',
        'telefono',
        'anio',
        'marca',
        'modelo',
        'fecha',
        'hora',
    ];

}
