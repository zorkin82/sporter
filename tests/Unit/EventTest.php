<?php

namespace Tests\Unit;

use App\Event;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function can_get_formatted_date()
    {
        $event = factory(Event::class)->make([
            'date' => Carbon::parse("November 9, 2017"),
        ]);

        $this->assertEquals('November 9, 2017', $event->formatted_date);
    }

    /** @test */
    function events_with_a_published_at_date_are_published()
    {
        $publishedEventA = factory(Event::class)->states('published')->create();
        $publishedEventB = factory(Event::class)->states('published')->create();
        $unpublishedEvent = factory(Event::class)->states('unpublished')->create();

        $publishedEvents = Event::published()->get();

        $this->assertTrue($publishedEvents->contains($publishedEventA));
        $this->assertTrue($publishedEvents->contains($publishedEventB));
        $this->assertFalse($publishedEvents->contains($unpublishedEvent));
    }


}
