<?php

namespace App\Models;

use App\Enuns\DocumentosEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class Documento extends Model
{
    use HasFactory;

    protected $legislativo = "https://legislativo.pedrodetoledo.sp.gov.br/";

    protected $table = 'atos_copy_2';
    protected $primaryKey = 'idAtos';
    protected $fillable = ['tipo_doc', 'numero', 'data', 'assunto', 'url', 'data_pub', 'pasta', 'status'];
    protected $appends = [
        'documentType'
    ];
    public $timestamps = false;

    protected $dates = [
        "data"
    ];


    //mutators
    public function getFileAttribute(): string
    {
        return $this->legislativo.$this->url;
    }

    public function getDataPublicacaoAttribute(): string
    {
        return Carbon::parse($this->data)->format('d/m/Y');
    }

    /**
     * Retorn o tipo do documento
     * @return string
     */
    public function getDocumentTypeAttribute() : string
    {
        $documentTypes = array_flip(DocumentosEnum::documentType());
        return firstWordInUpperCase($documentTypes[$this->tipo_doc]);
    }

    //query
    public function allDocuments(array $filters, int $perPage)
    {
        $query = $this->active();

        if (Arr::get($filters, "nome"))
        {
            $query->likeDescription($filters['nome']);
        }

        return $query->defaultOrderBy()
            ->paginate($perPage);
    }

    public function findByType(string $type, array $filters, int $perPage = 10)
    {
        $query = $this->active()->byTypeDoc($type);

        if (Arr::get($filters, "nome"))
        {
            $query->likeDescription($filters['nome']);
        }

        return $query->defaultOrderBy()
            ->paginate($perPage);

    }

    //scopes

    /**
     * retorna só os registro que estão ativos
     * @param Builder $query
     * @return Builder
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', true);
    }

    public function scopeByTypeDoc(Builder $query, $type): Builder
    {
        return $query->where("tipo_doc", $type);
    }

    public function scopeLikeDescription(Builder $query, $description): Builder
    {
        return $query->where("assunto", "LIKE", "%{$description}%");
    }

    public function scopeDefaultOrderBy(Builder $query): Builder
    {
        return $query->orderBy('data', 'desc')
            ->orderBy('numero', 'DESC');
    }

}
