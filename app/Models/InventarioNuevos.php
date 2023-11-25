<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventarioNuevos extends Model
{
    use HasFactory;

    protected $table = 'inventarioNuevos';
    protected $primaryKey = 'idNuevo';
    public $timestamps = true;

    protected $fillable = [
        'marca', 
        'modelo', 
        'color', 
        'cantidad', 
        'imagen',
        'estado'
    ];

    public static function boot()
    {
        parent::boot();

        self::saving(function ($nuevo) {
            // Asignar el estado según el valor de la cantidad
            $nuevo->estado = $nuevo->cantidad > 0 ? 'DISPONIBLE' : 'NO DISPONIBLE';
        });
    }
}
