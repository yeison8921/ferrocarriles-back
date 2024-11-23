<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funcionario extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'area_id',
        'nombre',
        'cargo',
        'correo',
        'ubicacion',
        'ciudad',
        'telefono',
    ];
}
