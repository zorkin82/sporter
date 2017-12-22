<?php

namespace Tests\Unit;

use App\Event;
use App\User;
use App\UserParticipant;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function a_user_must_have_a_email_address()
    {
        $user = factory(User::class)->create([
            'email' => "test@test.de"
        ]);
        $user1 = User::findOrFail($user->id);
        $this->assertEquals('test@test.de',$user1->email);
    }

    /** @test */
    function user_can_get_own_paticipations()
    {
        $eventA = factory(Event::class)->create();
        $eventB = factory(Event::class)->create();
        $user = factory(User::class)->create();

        $participationA = UserParticipant::fromUser($eventA, $user);
        $participationB = UserParticipant::fromUser($eventB, $user);

        $user = $user->fresh();
        $this->assertEquals(2, $user->participations->count());
        $this->assertTrue($user->participations->contains($participationA));
        $this->assertTrue($user->participations->contains($participationB));
    }

    /** @test */
    function user_cannot_get_paticipations_from_another_user()
    {
        $event = factory(Event::class)->create();
        $userA = factory(User::class)->create();
        $userB = factory(User::class)->create();

        $participationA = UserParticipant::fromUser($event, $userA);
        $participationB = UserParticipant::fromUser($event, $userB);

        $userA = $userA->fresh();
        $this->assertEquals(1, $userA->fresh()->participations->count());
        $this->assertTrue($userA->participations->contains($participationA));
        $this->assertFalse($userA->participations->contains($participationB));
    }





}
