<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;

    protected $table = 'calendario_tabla';

    protected $fillable = [
        'mes_año',
        'fecha_inicio',
        'fecha_fin',
        'tipo_calendario',
        'Descripcion',
    ];

    // Relaciónes, métodos, etc.
}
