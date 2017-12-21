<?php

namespace Tests\Feature;

use App\Event;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventDetailsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function user_can_view_a_published_event()
    {
        $this->withoutExceptionHandling();
        $event = factory(Event::class)->states('published')->create([
            'date' => Carbon::parse("November 9, 2017"),
        ]);

        $response = $this->get('/events/'.$event->id);

        $response->assertStatus(200);
        $response->assertSee('Example Event');
        $response->assertSee('November 9, 2017');
        $response->assertSee('Example Venue');
        $response->assertSee('Example Address');
        $response->assertSee('Example City');
        $response->assertSee('Example State');
        $response->assertSee('12345');
        $response->assertSee('Example Organizer');
        $response->assertSee('Example Host');

    }

    /** @test */
    function user_cannot_view_a_unpublished_event()
    {

        $event = factory(Event::class)->states('unpublished')->create();

        $response = $this->get('/events/'.$event->id);
        $response->assertStatus(404);
    }

}
