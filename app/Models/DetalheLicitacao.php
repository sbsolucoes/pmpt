<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalheLicitacao extends Model
{
    use HasFactory;
    /* como vc n esta trabalhando com o padrão do laravel, sempre informa com o nome da chame primaria.
    *
    * dentro da variavel $fillable, n precisa informar o id da tabela, só fazer como eu fiz*/
    protected $table = 'licitacao';
    protected $primaryKey = 'idLicitacaoDelt';
    protected $fillable = [ 'idLicitacao'
                            'tituloLicitacao', 
                            'nomeArq', 
                            'dtPub', 
                            'status'    
                           ];
    public $timestamps = false;
}
