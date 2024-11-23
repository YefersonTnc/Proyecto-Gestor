<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;

    protected $table = 'notificaciones_tabla';

    protected $fillable = [
        'mensaje',
        'fecha_envio',
        'estado_envio',
        'metodo_envio',
        'tipo_notificacion',
        'repetir',
        'repetir_intervalo',
        'fecha_enviodo',
    ];

    // Relaciónes, métodos, etc.
}
