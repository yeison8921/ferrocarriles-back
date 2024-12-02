<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categorias';

    protected $fillable = [
        'categoria_id',
        'modulo_id',
        'normatividad_id',
        'seccion_id',
        'nombre',
    ];

    public function documentos()
    {
        return $this->hasMany(Documento::class);
    }

    public function categorias()
    {
        return $this->hasMany(Categoria::class)->with("documentos");
    }

    public function categoriasRecursive()
    {
        return $this->categorias()->with('categoriasRecursive');
    }

    public function parentCategory()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function getAllParents()
    {
        $parents = collect();

        $currentParent = $this->parentCategory;
        while ($currentParent) {
            $parents->push($currentParent);
            $currentParent = $currentParent->parentCategory;
        }

        return $parents->sortBy('id')->values();
    }
}
