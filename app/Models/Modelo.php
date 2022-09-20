<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#Models
use App\Models\{Marca};

class Modelo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'modelos';
    protected $primaryKey = 'id_modelo';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = ['id_marca', 'modelo', 'anos_modelo','descricao'];

    /*
    |------------------------------------------------
    | Relacionamentos
    | https://laravel.com/docs/9.x/eloquent-relationships
    |------------------------------------------------    
    */

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca', 'id_marca');
    }
}
