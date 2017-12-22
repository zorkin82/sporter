<?php
/**
 * User: Dirk Beckmann
 * Date: 22.12.2017
 * Time: 10:50
 */

use App\Event;
class EventFactory
{
    public static function createPublished($overrides = [])
    {
        $event = factory(Event::class)->create($overrides);
        $event->publish();
        return $event;
    }
    public static function createUnpublished($overrides = [])
    {
        return factory(Event::class)->states('unpublished')->create($overrides);
    }
}