<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Documento extends Model
{
    use HasFactory;

    protected $legislativo = "https://legislativo.pedrodetoledo.sp.gov.br/";

    protected $table = 'atos_copy_2';
    protected $primaryKey = 'idAtos';
    protected $fillable = ['tipo_doc', 'numero', 'data', 'assunto', 'url', 'data_pub', 'pasta', 'status'];
    public $timestamps = false;


    //mutators
    public function getFileAttribute(){
        return $this->legislativo.$this->url;
    }
}
