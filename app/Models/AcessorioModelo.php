<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#Models
use App\Models\{Acessorio, Modelo};

class AcessorioModelo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'acessorio_modelos';
    protected $primaryKey = 'id_acessorio_modelo';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = ['id_acessorio', 'id_modelo'];

    /*
    |------------------------------------------------
    | Relacionamentos
    | https://laravel.com/docs/9.x/eloquent-relationships
    |------------------------------------------------    
    */

    public function acessorio()
    {
        return $this->belongsTo(Acessorio::class, 'id_acessorio', 'id_acessorio')->withTrashed();
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'id_modelo', 'id_modelo')->withTrashed();
    }
}
