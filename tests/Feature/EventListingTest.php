<?php

namespace Tests\Feature;

use App\Event;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventListingTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function user_can_only_view_a_list_of_published_events()
    {
        $this->withoutExceptionHandling();

        factory(Event::class)->states('published')->create([ "title" => "Published Event 1"]);
        factory(Event::class)->states('published')->create([ "title" => "Published Event 2"]);
        factory(Event::class)->states('unpublished')->create([ "title" => "Unpublished Event 1"]);


        $response = $this->get('/events');

        $response->assertStatus(200);
        $response->assertSee('Published Event 1');
        $response->assertSee('Published Event 2');
        $response->assertDontSee('Unpublished Event 1');

    }




}
