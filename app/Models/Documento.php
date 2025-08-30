<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;

class Documento extends Model
{
    use HasFactory;

    protected $legislativo = 'https://sistema.pedrodetoledo.sp.gov.br/';

    protected $table = 'atos_copy_2';

    protected $primaryKey = 'idAtos';

    protected $fillable = ['tipo_doc', 'numero', 'data', 'assunto', 'url', 'data_pub', 'pasta', 'status', 'atos_tipo_id'];

    protected $appends = [
        'documentType',
    ];

    public $timestamps = false;

    protected $dates = [
        'data',
    ];

    // relations

    public function atosTipo(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(AtosTipo::class, 'id', 'atos_tipo_id');
    }

    // mutators
    public function getFileAttribute(): string
    {
        return $this->legislativo.$this->url;
    }

    public function getDataPublicacaoAttribute(): string
    {
        return Carbon::parse($this->data)->format('d/m/Y');
    }

    // query
    public function allDocuments(array $filters, int $perPage)
    {
        $query = $this->baseQuery();

        if (Arr::get($filters, 'nome', null)) {
            $query->likeDescription($filters['nome']);
        }

        return $query->defaultOrderBy()
            ->paginate($perPage);
    }

    public function findByType(string $type, array $filters, int $perPage = 10)
    {
        $query = $this->baseQuery();

        $query->whereHas('atosTipo', function ($query) use ($type) {
            $query->where('slug', $type);
        });

        if (Arr::get($filters, 'nome')) {
            $query->likeDescription($filters['nome']);
        }

        return $query->defaultOrderBy()
            ->paginate($perPage);

    }

    // scopes

    /**
     * retorna só os registro que estão ativos
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', true);
    }

    public function scopeLikeDescription(Builder $query, $description): Builder
    {
        return $query->where('assunto', 'LIKE', "%{$description}%");
    }

    public function scopeDefaultOrderBy(Builder $query): Builder
    {
        return $query->orderBy('data', 'desc')
            ->orderBy('numero', 'DESC');
    }

    public function scopeBaseQuery(Builder $query)
    {
        return $this->with('atosTipo:id,descricao')->active();
    }
}
