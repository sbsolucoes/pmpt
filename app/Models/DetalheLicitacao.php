<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Licitacao;

class DetalheLicitacao extends Model
{
    use HasFactory;
    /* como vc n esta trabalhando com o padrão do laravel, sempre informa com o nome da chame primaria.
    *
    * dentro da variavel $fillable, n precisa informar o id da tabela, só fazer como eu fiz*/
    protected $table = 'licitacao_detalhe';
    
    protected $fillable = [ 'idLicitacaoDelt',
                            'idLicitacao',
                            'tituloLicitacao',
                            'nomeArq', 
                            'dtPub', 
                            'status'    
                           ];
    public $timestamps = false;
    
    public function Licitacao(){
        //return $this->hasMany('App\Models\Licitacao', 'idLicitacao' );
        
    }
}
