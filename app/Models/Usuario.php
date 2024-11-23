<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios_tabla';

    protected $fillable = [
        'nombre_usuario',
        'correo_electronico',
        'contraseña',
    ];

    protected $hidden = [
        'contraseña',
    ];

    // Relaciónes, métodos, etc.
}
