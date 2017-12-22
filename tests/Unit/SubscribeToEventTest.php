<?php

namespace Tests\Unit;

use App\Event;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SubscribeToEventTest extends TestCase
{
    use RefreshDatabase;

    private function subscribeToEvent($event, $params)
    {
        $savedRequest = $this->app['request'];
        $this->response = $this->json('POST', "/events/{$event->id}/subscribtions", $params);
        $this->app['request'] = $savedRequest;
    }

    /** @test */
    function user_can_subscribe_to_an_published_event()
    {
        $user =  factory(User::class)->states('self')->create();
        $event = factory(Event::class)->states('selfregister')->create();

        $this->subscribeToEvent($event,[
            'first_name' => $user->name
        ]);
        $this->markTestIncomplete();
    }

    /** @test */
    function user_cannot_subscribe_to_an_unpublished_event()
    {
        $this->markTestIncomplete();
    }

}
