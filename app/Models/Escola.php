<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    use HasFactory;
   protected $table = 'escolas';

   protected $primaryKey = 'id';

   protected $fillable = [
       'nome',
        'email','fnde',
        'code_estado','estado',
        'code_cidade','cidade',
        'cep','bairro',
        'rua','número',
        'complemento','telefone',
    ];
}
