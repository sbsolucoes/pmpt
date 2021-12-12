<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Diretor extends Model
{
    //protected $legislativo = "https://legislativo.pedrodetoledo.sp.gov.br/";

    protected $table = 'diretor';
    protected $primaryKey = 'iddiretor';
    //protected $foreignKey = 'id_depto';
    protected $fillable = [ 'id_depto', 'nomeDire',  'status', 'tipoDiretor'];
    
    public $timestamps = false;

    public function depto() {
        return$this->belongsTo('App\Models\Departamento', 'depto', 'id_depto');
    }

    //mutators
    public function getFileAttribute(){
        //return $this->legislativo.$this->url;
    }
}
