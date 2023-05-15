<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;

class Noticia extends Model
{
    protected $cms = 'https://cms.pedrodetoledo.sp.gov.br/wp-content';
    use HasFactory;
    protected $table = 'tb_posts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'categoria_id',
        'post_title',
        'post_name',
        'post_content',
        'guid',
        'post_date',
        'post_status'
    ];
    //public $timestamps = false;

    /**
     * @return string
     */
    public function getUrlFileAttribute(): string
    {
        $url = explode('wp-content', $this->guid)[1];
        return $this->cms.$url;
    }

    public function getPostTitleAttribute(string $value): string
    {
        return Str::upper($value);
    }


    public function categoria(): HasOne
    {
        return $this->hasOne(Categoria::class, 'id', 'categoria_id');
    }

    public function galeriaImagens(): HasMany
    {
        return $this->hasMany(PostGalery::class, 'post_id', 'id');
    }

    /**
     * @param string $slug
     * @return mixed
     */
    public function getAllBySlug(string $slug)
    {
        return $this->wherehas('categoria', function($query) use($slug) {
            $query->where([
                'slug' => $slug,
                'status' => true
            ]);
        })->with('categoria')
            ->where("post_status", true)
            ->orderBy('post_date', 'DESC')->paginate(15);
    }

    public function findBySlugs(string $cagoriaSlug, string $postSlug)
    {
        return $this->with(['galeriaImagens'])->whereHas('categoria', function($query) use($cagoriaSlug){
            $query->where([
                'slug' => $cagoriaSlug,
                'status' => true
            ]);
        })->where([
            'post_name' => $postSlug,
            'post_status' => true
        ])->firstOrFail();
    }

    public function onlyActives(int $limit = 6)
    {
        return $this->with(['categoria'])->where('post_status', true)
            ->orderBy('post_date', 'desc')
            ->take($limit)
            ->get();
    }

    public function scopeActive()
    {
        $this->where('post_status', true);
    }

}
