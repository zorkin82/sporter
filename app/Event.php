<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Event
 *
 * @mixin \Eloquent
 * @property-read mixed $formatted_date
 * @method static Builder|\App\Event published()
 */
class Event extends Model
{
    protected $guarded = [];
    protected $dates = ['date'];

    public static function scopePublished(Builder $query)
    {
        return $query->whereNotNull('published_at');
    }

    public function getFormattedDateAttribute()
    {
        return $this->date->format('F j, Y');
    }
}
