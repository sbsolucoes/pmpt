<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetalheLicitacao;

class Licitacao extends Model
{
    use HasFactory;
        /* como vc n esta trabalhando com o padrão do laravel, sempre informa com o nome da chame primaria.
    *
    * dentro da variavel $fillable, n precisa informar o id da tabela, só fazer como eu fiz*/
    protected $table = 'licitacao';
    protected $primaryKey = 'idLicitacao';
    protected $fillable = ['tipoLicitacao', 
                            'numeroLicitacao',
                            'dtCad', 
                            'content', 
                            'status'    
                           ];
    public $timestamps = false;

    public function detalheLicitacao(){
        //return $this->hasMany('App\Models\DetalheLicitacao', 'idLicitacao', 'idLicitacao');
    }

}


