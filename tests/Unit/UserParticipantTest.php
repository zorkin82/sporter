<?php
/**
 * User: Dirk Beckmann
 * Date: 22.12.2017
 * Time: 16:55
 */

namespace Tests\Unit;

use App\Event;
use App\User;
use App\UserParticipant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserParticipantTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function can_get_userParticipantCount_for_event()
    {
        $event = factory(Event::class)->create();

        $user = factory(User::class)->create([
            'first_name' => "Max",
            'last_name' => "Mustermann",
            'email' => "max@mustermann.de"
        ]);

        $this->assertEquals(0, $event->participantsCount);

        UserParticipant::fromUser($event, $user);

        $this->assertEquals(1, $event->fresh()->participantsCount);

    }


    /** @test */
    function participantList_dont_contains_userParticipants_from_other_events()
    {
        $eventA = factory(Event::class)->create();
        $eventB = factory(Event::class)->create();

        $userA = factory(User::class)->create([
            'first_name' => "Max",
            'last_name' => "Mustermann",
            'email' => "max@mustermann.de"
        ]);

        $userB = factory(User::class)->create([
            'first_name' => "Sabine",
            'last_name' => "Mustermann",
            'email' => "sabine@mustermann.de"
        ]);

        factory(UserParticipant::class, 2)->create([
            'event_id' => $eventA->id,
            'user_id' => $userA->id,
        ]);

        factory(UserParticipant::class, 5)->create([
            'event_id' => $eventB->id,
            'user_id' => $userB->id,
        ]);

        $participantA = UserParticipant::fromUser($eventA, $userA);
        $participantB = UserParticipant::fromUser($eventB, $userB);

        $eventB = $eventB->fresh();

        $this->assertEquals(6, $eventB->participantsCount);
        $this->assertTrue($eventB->participants->contains($participantB));
        $this->assertFalse($eventB->participants->contains($participantA));
    }


}
