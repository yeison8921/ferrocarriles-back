<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Directorio extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'pagina_id',
    ];

    public function areas()
    {
        return $this->hasMany(Area::class);
    }
}
