<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory('App\Event',25)->create();
        factory('App\Event',5)->states('unpublished')->create();
        factory('App\Event',10)->states('published')->create();
    }
}
