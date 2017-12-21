<?php

namespace Tests\Unit;

use App\Event;
use App\User;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function a_user_must_have_a_email_address()
    {
        $user = factory(User::class)->create([
            'email' => "test@test.de"
        ]);
        $user1 = User::findOrFail($user->id);
        $this->assertEquals('test@test.de',$user1->email);
    }



}
