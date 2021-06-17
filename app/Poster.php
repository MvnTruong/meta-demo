<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static firstOrNew(array $array)
 */
class Poster extends Model
{
    protected $fillable = ['src'];

    public function movies(): HasMany
    {
        return $this->hasMany(Movie::class);
    }
}
