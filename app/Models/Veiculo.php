<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#Models
use App\Models\{Modelo, User};

class Veiculo extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'veiculos';
    protected $primaryKey = 'id_veiculo';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
                        'id_modelo',  
                        'id_user', 
                        'valor', 
                        'cor', 
                        'placa', 
                        'descricao'
                        ];

    /*
    |------------------------------------------------
    | Relacionamentos
    | https://laravel.com/docs/9.x/eloquent-relationships
    |------------------------------------------------    
    */

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'id_modelo', 'id_modelo')->withTrashed();
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_user', 'id_user')->withTrashed();
    }
}
