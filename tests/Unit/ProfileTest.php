<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;



class ProfileTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSave()
    {
        //make user
        $user=factory(\App\User::class)->make();
        $user->save();
        //make profileTest
        $profile=factory(\App\Profile::class)->make();
        //associate profileTest with user
        $profile->user()->associate($user);
        $this->assertTrue($user->save());
    }
}
