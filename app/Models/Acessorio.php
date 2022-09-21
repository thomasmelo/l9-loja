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
        return $this->belongsTo(AcessorioModelo::class, 'id_acessorio', 'id_acessorio')->withTrashed();
    }

    /**
     * -----------------------------------------------------------------------------------
     * | OUTROS MÉTODOS
     * -----------------------------------------------------------------------------------
     */

    /**
     * Salva objetos-filho das classes `AcessorioModelo`,	 
     *
     * @param	array	Array com IDs dos acessorios
     * @param	class	Classe dos objetos que serão instanciados e salvos.
     * @return	void
     */
    public function adicionarModelo($modelos, $classe = AcessorioModelo::class)
    {
        foreach ($modelos as $idModelo) {
            $instancia = new $classe(
                ['id_acessorio' => $this->id_acessorio, 'id_modelo' => $idModelo]
            );
            $instancia->save();
        }
    }

    /**
     * Remove os objetos-filho das classes `AcessorioModelo`,	 
     *
     * @return	void
     */
    public function removerModelos()
    {
        $modelo = AcessorioModelo::where('id_acessorio', $this->attributes['id_acessorio']);
        $modelo->delete();
    }

}
