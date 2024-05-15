<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $fildables  = [
        'id',
        'nombre',
        'id_docente',
        'id_gestion'
    ];
}
