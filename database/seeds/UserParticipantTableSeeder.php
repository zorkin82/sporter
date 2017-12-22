<?php

use App\UserParticipant;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UserParticipantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $events = \App\Event::all();
        $users = \App\User::all();

        foreach ($events as $event) {
            //$user_count = $faker->numberBetween($min = 0, $max = $users->count());
            $user_count = $faker->numberBetween($min = 0, $max = $users->count());
            $participants = $users->random($user_count);

            foreach ($participants as $participant) {
                UserParticipant::fromUser($event, $participant);
            }
        }
    }
}
