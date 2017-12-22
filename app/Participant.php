<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    /**
     * Get the event that owns the participant.
     */
    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}
