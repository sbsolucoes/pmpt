<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AtosTipo extends Model
{
    use HasFactory;

    protected $table = 'atos_tipos';

    // relations
    public function atos(): BelongsTo
    {
        return $this->belongsTo(Documento::class, 'id', 'atos_tipo_id');
    }

    // scopes
    public function scopeOnlyAdivices(Builder $query)
    {
        $query->where('is_conselho', true);
    }

    public function getAdivices()
    {
        return $this->has('atos')
            ->withCount(['atos' => function ($query) {
                return $query->where('status', 1);
            }])
            ->onlyAdivices()
            ->get();
    }
}
