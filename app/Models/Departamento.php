<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    // protected $legislativo = "https://legislativo.pedrodetoledo.sp.gov.br/";

    protected $table = 'depto';

    protected $primaryKey = 'id_depto';

    protected $fillable = ['nomeDepto', 'deptoEnd', 'fone', 'email', 'status'];

    public $timestamps = false;

    public function diretor()
    {

        // return$this->hasMany(Diretor::class, 'depto_id_depto');
        return $this->hasMany('App\Models\Diretor', 'id_depto');
    }

    // mutators
    public function getFileAttribute()
    {
        // return $this->legislativo.$this->url;
    }
}
