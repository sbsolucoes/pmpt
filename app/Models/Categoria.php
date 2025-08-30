<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'tb_categorias';

    protected $primaryKey = 'id';

    protected $fillable = [
        'ds_categoria',
    ];

    public function scopeBySlug(Builder $query, $slug)
    {
        $query->where('slug', $slug);
    }

    public function noticia(): HasMany
    {
        return $this->hasMany(Noticia::class);
    }

    public function scopeActive(Builder $query)
    {
        $query->where('status', true);
    }
}
