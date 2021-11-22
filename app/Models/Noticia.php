<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $cms = 'https://cms.pedrodetoledo.sp.gov.br/wp-content';
    use HasFactory;
    protected $table = 'tb_posts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'post_title',
        'post_name',
        'post_content',
        'guid',
        'post_date',
        'post_status'
    ];
    //public $timestamps = false;

    public function getUrlFileAttribute(){
        $url = explode('wp-content', $this->guid)[1];
        return $this->cms.$url;
    }

}
