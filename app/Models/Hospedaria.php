<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospedaria extends Model
{
    //protected $cms = 'https://cms.pedrodetoledo.sp.gov.br/wp-content';
    use HasFactory;
    protected $table = 'hospedaria';
    protected $primaryKey = 'idHosp';
    protected $fillable = [
        'nome',
        'endereco',
        'bairro',
        'telefone',
        'email',
        'tipo',
        'foto',
        'status'
    ];
    //public $timestamps = false;

    public function getUrlFileAttribute(){
        //return $this->legislativo.$this->url;
    }

}
