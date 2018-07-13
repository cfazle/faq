<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnswerTest extends TestCase
{
   // use RefreshDatabase;
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
        $question -> save();

        $answer = factory(\App\Answer::class)->make();
        //associate answer with user
        $answer->user()->associate($user);
        //associate answer with question
        $answer->question()->associate($question);
        $answer->save();
        $this->assertTrue($answer->save());
    }
}
