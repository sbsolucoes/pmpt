<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concurso extends Model
{
    use HasFactory;

    /* como vc n esta trabalhando com o padrão do laravel, sempre informa com o nome da chame primaria.
    *
    * dentro da variavel $fillable, n precisa informar o id da tabela, só fazer como eu fiz*/
    protected $table = 'concurso';

    protected $primaryKey = 'id_conc';

    protected $fillable = ['tipoConc',
        'numero',
        'dataPub',
        'exibir',
        'id_departamento',
        'ano',
    ];

    public $timestamps = false;

    public function detalheConcurso()
    {
        return $this->hasMany('App\Models\ConcursoDetalhe', 'id_conc');
    }
}
