<?php

namespace Tests\Feature;

use App\Event;
use App\User;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventRegistrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function a_user_can_see_a_register_button_for_a_published_selfregister_event()
    {
        $this->withoutExceptionHandling();
        $event = factory(Event::class)->states('selfregister')->create();
        $user = factory(User::class)->create();

        $this->actingAs($user);

        $response = $this->get('/events/'.$event->id);

        $response->assertStatus(200);
        $response->assertSee('Anmelden');


    }

    /** @test */
    function a_user_cannot_see_a_register_button_for_a_published_organisationregister_event()
    {
        $event = factory(Event::class)->states('orgregister')->create();
        $user = factory(User::class)->create();

        $this->actingAs($user);

        $response = $this->get('/events/'.$event->id);

        $response->assertStatus(200);
        $response->assertDontSee('Anmelden');

    }
}
