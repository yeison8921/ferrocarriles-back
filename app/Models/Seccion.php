<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seccion extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'secciones';

    protected $fillable = [
        'nombre',
    ];

    public function categorias()
    {
        return $this->hasMany(Categoria::class)->whereNull('categoria_id');
    }

    public function categoriasRecursive()
    {
        return $this->categorias()->with('categoriasRecursive');
    }
}
