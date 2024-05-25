<?php

namespace App\Models;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class File extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function folder(): BelongsTo
    {
        return $this->belongsTo(Folder::class);
    }

    public function scopeFolder(Builder $q, Folder $parent): Builder
    {
        return $q->where('folder_id', $parent->id);
    }

    public static function getByFolder(Folder $folder): Collection
    {
        return static::query()
            ->folder($folder)
            ->get();
    }
}
