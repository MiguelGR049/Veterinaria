<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    use HasFactory;

    // Nombre exacto de la tabla
    protected $table = 'citas';

    // Campos que pueden asignarse masivamente
    protected $fillable = [
        'fecha',
        'motivo',
        'cliente',
        'mascota',
        'telefono'
    ];

    // Si la clave primaria no se llama "id", podrías especificarla así:
    // protected $primaryKey = 'id';
}
