<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumnoMateria extends Model
{
    use HasFactory;
    protected $fildables  = [
        'id',
        'nota',
        'id_alumnos',
        'id_materia'
    ];
}
