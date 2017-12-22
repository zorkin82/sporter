<?php

namespace Tests\Feature;

use App\User;
use Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserRegisterTestTest extends TestCase
{
    use RefreshDatabase;

    private function validParams($overrides = [])
    {
        return array_merge([
            'title' => 'No Warning',
            'subtitle' => 'with Cruel Hand and Backtrack',
            'additional_information' => "You must be 19 years of age to attend this concert.",
            'date' => '2017-11-18',
            'time' => '8:00pm',
            'venue' => 'The Mosh Pit',
            'venue_address' => '123 Fake St.',
            'city' => 'Laraville',
            'state' => 'ON',
            'zip' => '12345',
            'ticket_price' => '32.50',
            'ticket_quantity' => '75',
        ], $overrides);
    }

    /** @test */
    function guest_can_see_the_registration_form()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }


}
