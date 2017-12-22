<?php

namespace Tests\Feature;

use App\User;
use Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserLoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function logging_in_with_valid_credentials()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create([
            'email' => 'max@mustermann.de',
            'password' => bcrypt('secret'),
        ]);

        $response = $this->post('/login', [
            'email' => 'max@mustermann.de',
            'password' => 'secret'
        ]);

        $response->assertRedirect('/home');

        $this->assertTrue(Auth::check());
        $this->assertTrue(Auth::user()->is($user));
    }


    /** @test */
    function logging_out_the_current_user()
    {
        Auth::login(factory(User::class)->create());
        $response = $this->post('/logout');
        $response->assertRedirect('/');
        $this->assertFalse(Auth::check());
    }
}
