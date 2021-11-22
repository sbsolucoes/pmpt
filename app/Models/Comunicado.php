<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunicado extends Model
{
    use HasFactory;
    protected $cms = 'https://cms.pedrodetoledo.sp.gov.br/comunicados';
    protected $table = 'pt_comunicados';
    protected $primaryKey = 'idComunicados';
    protected $fillable = ['com_titulo', 'com_name', 'com_content', 'com_dtPub', 'fotoComun', 'exibir'];
    public $timestamps = false;


    //mutators
    public function getFileAttribute()
    {
        $url = explode('comunicados', $this->fotoComun)[1];
        return $this->cms.$url;

    }
}
