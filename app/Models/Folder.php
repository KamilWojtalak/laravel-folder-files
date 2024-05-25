<?php

namespace App\Models;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeParent(Builder $q, Folder $parent): Builder
    {
        return $q->where('parent_id', $parent->id);
    }

    public static function getByParent(Folder $folder): Collection
    {
        return static::query()
            ->parent($folder)
            ->get();
    }
}
