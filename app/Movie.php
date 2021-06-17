<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property mixed|string title
 * @property mixed|string year
 * @property mixed|string imdb
 * @property mixed|string type
 * @method static firstOrNew(array $array)
 */
class Movie extends Model
{
    protected $fillable = ['title'];

    public function poster(): BelongsTo
    {
        return $this->belongsTo(Poster::class);
    }
}
