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
        'estado'
    ];
}
