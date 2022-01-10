<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class educacao extends Model
{
    protected $legislativo = "https://legislativo.pedrodetoledo.sp.gov.br/";

    protected $table = 'educacao';
    protected $primaryKey = 'idEdu';
    //protected $foreignKey = 'id_depto';
    protected $fillable = [ 'dtpub', 'dtcad', 'deltDoc', 'url', 'status'];
    
    public $timestamps = false;

    

    //mutators
    public function getFileAttribute(){
        return $this->legislativo.$this->url;
    }
}
