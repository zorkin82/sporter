<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        //factory('App\Event',25)->create();
        for($i=0; $i < 10;$i++) {
            factory('App\Event')->states('unpublished')->create([
                'title' => $faker->words($nb = 3, $asText = true),
                'date' => $faker->dateTimeBetween($startDate = '+1 weeks', $endDate = '+4 weeks'),
                'venue' => $faker->company . " Venue",
                'venue_address' => $faker->address,
                'city' => $faker->city,
                'state' => $faker->state,
                'zip' => $faker->postcode,
                'organizer' => "Allgemeiner Deutscher Hochschulsportverband",
                'host' => $faker->company,
                'description' => $faker->text(),
                'type' => "SingleSportEvent",
                'category' => "DHM",
                'sport' => "Handball",
                'registration_type' => "Self",
            ]);
        }
        for($i=0; $i < 50;$i++) {
            factory('App\Event')->states('published')->create([
                'title' => $faker->words($nb = 3, $asText = true),
                'date' => $faker->dateTimeBetween($startDate = '-4 weeks', $endDate = '+3 weeks'),
                'venue' => $faker->company . " Venue",
                'venue_address' => $faker->address,
                'city' => $faker->city,
                'state' => $faker->state,
                'zip' => $faker->postcode,
                'organizer' => "Allgemeiner Deutscher Hochschulsportverband",
                'host' => $faker->company,
                'description' => $faker->text(),
                'type' => "SingleSportEvent",
                'category' => "DHM",
                'sport' => "Handball",
                'registration_type' => "Self",
            ]);
        }
    }
}
