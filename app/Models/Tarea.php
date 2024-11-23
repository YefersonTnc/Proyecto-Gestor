<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    protected $table = 'tareas_tabla';

    protected $fillable = [
        'Titulo',
        'fecha_limite',
        'estado',
    ];

    // Relaciónes, métodos, etc.
}
