<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostGalery extends Model
{
    use HasFactory;

    protected $table = 'posts_galeries';

    protected $fillable = [
        'post_id',
        'file_path',
        'file_type'
    ];

    private $cms = 'https://cms.pedrodetoledo.sp.gov.br/';

    public function getFilePathAttribute(string $value): string
    {
        if(app()->environment() != 'production'){
            return "http://localhost:8000/{$value}";
        }

        return "{$this->cms}{$value}";
    }

}
