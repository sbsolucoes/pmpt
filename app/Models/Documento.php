<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Documento extends Model
{
    use HasFactory;
    /*
     * como vc n esta trabalhando com o padrão do laravel, sempre informa com o nome da chame primaria.
     *
     * dentro da variavel $fillable, n precisa informar o id da tabela, só fazer como eu fiz*/
    protected $table = 'atos_copy_2';
    protected $primaryKey = 'idAtos';
    protected $fillable = ['tipo_doc', 'numero', 'data', 'assunto', 'url', 'data_pub', 'pasta', 'status'];
    public $timestamps = false;
    

    //mutators
    public function getFileAttribute(){
    /*
     * essa função verifica se existe o arquivo, caso exista ele cria a url do arquivo
     * quando vc chamar o model documento, vc pode chamar a função apenas como file
     * o builder do laravel entende oq precisa ser feito
     * */
        if(Storage::disk('public')->exists('sistema/'.$this->url)){
            return Storage::url('sistema/'.$this->url);
        }
        return '#';

    }
}