<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserParticipant extends Model
{
    protected $guarded = [];
    /**
     * Get the event that owns the participant.
     */
    public function event()
    {
        return $this->belongsTo('App\Event');
    }

    /**
     * Get the user that owns the participant.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public static function fromUser(Event $event, User $user)
    {
        $participant = self::create([
            'event_id' => $event->id,
            'user_id' => $user->id,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
        ]);

        return $participant;
    }

}
