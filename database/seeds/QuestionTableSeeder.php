<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =  App\User::all();
        $users->each(function ($users) {
            $question = factory(\App\Question::class)->make();
            $question->user()->associate($users);
            $question->save();
        });
    }
}
