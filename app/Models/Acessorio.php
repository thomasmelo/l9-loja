<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#Models
use App\Models\{AcessorioModelo};

class Acessorio extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'acessorios';
    protected $primaryKey = 'id_acessorio';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = ['acessorio', 'descricao'];

    /*
    |------------------------------------------------
    | Relacionamentos
    | https://laravel.com/docs/9.x/eloquent-relationships
    |------------------------------------------------    
    */

    public function modelos()
    {
        return $this->belongsTo(AcessorioModelo::class, 'id_acessorio', 'id_acessorio');
    }

}
