<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConcursoDetalhe extends Model
{
    use HasFactory;

    protected $legislativo = 'https://sistema.pedrodetoledo.sp.gov.br/';

    protected $table = 'concdetalhe';

    protected $primaryKey = 'idConcdetalhe';

    protected $fillable = ['id_conc', 'tituloDetalhe', 'dtPub', 'pasta', 'doc'];

    public $timestamps = false;

    public function getFileAttribute()
    {
        return $this->legislativo.$this->pasta.$this->doc;
    }
}
