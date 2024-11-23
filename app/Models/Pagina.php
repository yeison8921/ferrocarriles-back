<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pagina extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'paginas';

    protected $fillable = [
        'nombre',
        'contenido',
        'estado',
    ];

    public function normatividades()
    {
        return $this->hasMany(Normatividad::class);
    }

    public function normatividad()
    {
        return $this->hasOne(Normatividad::class);
    }

    public function secciones()
    {
        return $this->hasMany(Seccion::class);
    }

    public function directorios()
    {
        return $this->hasMany(Directorio::class);
    }
}
