<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // $users =  App\User::inRandomOrder();
        $users = App\User::inRandomOrder();
        for($i=1; $i<=6; $i++) {
            $users->each(function ($users) {
                $question = App\Question::inRandomOrder()->first();
                $answer = factory(\App\Answer::class)->make();
                $answer->user()->associate($users);
                $answer->question()->associate($question);
                $answer->save();
            });
        }
    }
}
