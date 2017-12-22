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
        'sport' => "Handball",
        'registration_type' => "Self",
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

$factory->state(\App\Event::class, 'selfregister', function ($faker)
{
    return[
        'published_at' => Carbon::parse('-1 week'),
        'registration_type' => 'Self'
    ];
});

$factory->state(\App\Event::class, 'orgregister', function ($faker)
{
    return[
        'published_at' => Carbon::parse('-1 week'),
        'registration_type' => 'Organisation'
    ];
});


/**
 * User Factories
 */


$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->state(App\User::class, 'self', function ($faker)
{
    return[
        'permission' => 'Self'
    ];
});


$factory->state(App\User::class, 'org', function ($faker)
{
    return[
        'permission' => 'Organisation'
    ];
});


/**
 * Participants
 */

$factory->define(App\UserParticipant::class, function (Faker $faker) {

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'event_id' => $faker->numberBetween(1,50),
    ];
});
