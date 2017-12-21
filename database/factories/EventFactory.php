<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'title' => "Example Event",
        'date' => Carbon::parse("+2 weeks"),
        'venue' => "Example Venue",
        'venue_address' => "Example Address",
        'city'  => 'Example City',
        'state' => 'Example State',
        'zip'   => '12345',
        'organizer' => "Example Organizer",
        'host' => "Example Host",
        'description' => $faker->text(),
        'type' => "SingleSportEvent",
        'category' => "DHM",
        'sport' => "Handball"
    ];
});

$factory->state(\App\Event::class, 'published', function ($faker)
{
        return[
            'published_at' => Carbon::parse('-1 week'),
        ];
});

$factory->state(\App\Event::class, 'unpublished', function ($faker)
{
        return[
            'published_at' => null,
        ];
});
