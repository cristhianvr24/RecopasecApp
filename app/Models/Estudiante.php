<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable= ['cedula', 'nombre_1', 'nombre_2', 'apellido_1', 'apellido_2', 'telefono', 'email'];
}
