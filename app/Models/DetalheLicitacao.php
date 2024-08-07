<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalheLicitacao extends Model
{
    use HasFactory;

    protected $legislativo = "https://sistema.pedrodetoledo.sp.gov.br/";
    protected $table = 'licitacaodetalhe';

    protected $fillable = [ 'idLicitacaoDelt','idLicitacao','tituloLicitacao','nomeArq','dtPub','status'];
    public $timestamps = false;


    public function getFileAttribute(){
        return "{$this->legislativo}arquivos/licitacao/{$this->nomeArq}";
    }
}
