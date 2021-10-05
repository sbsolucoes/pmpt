<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    use HasFactory;

    /* como vc n esta trabalhando com o padrão do laravel, sempre informa com o nome da chame primaria.
    *
    * dentro da variavel $fillable, n precisa informar o id da tabela, só fazer como eu fiz*/
   protected $table = 'escolas';
   protected $primaryKey = 'id';
   protected $fillable = ['nome', 
                            'email', 
                            'fnde', 
                            'code_estado', 
                            'estado', 
                            'code_cidade', 
                            'cidade', 
                            'cep',
                            'bairro',
                            'rua',
                            'número',
                            'complemento',
                            'telefone',
                            'created_at',
                            'updates_at'

    ];
   public $timestamps = false;
}
