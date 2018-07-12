<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QuestionTest extends TestCase
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
        //make question
        $question=factory(\App\Question::class)->make();
        //associate profileTest with user
        $question->user()->associate($user);
        $this->assertTrue($question->save());
    }
}
