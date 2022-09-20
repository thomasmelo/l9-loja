<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#Models
use App\Models\Modelo;

class Marca extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'marcas';
    protected $primaryKey = 'id_marca';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = ['marca'];

    /*
    |------------------------------------------------
    | Relacionamentos
    | https://laravel.com/docs/9.x/eloquent-relationships
    |------------------------------------------------    
    */

    public function modelos()
    {
        return $this->belongsTo(Modelo::class, 'id_marca', 'id_marca');
    }
}
