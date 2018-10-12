<?php

use Illuminate\Database\Seeder;

class HabitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'Breathing', 'description'=> 'Breathe in and out, and in and out, and in ...'],
            ['name'=>'Walking', 'description'=> 'Go outside and take a walk'],
            ['name'=>'Stargazing', 'description'=> 'Gaze at the stars, get lost in the mistery of the universe'],
            ['name'=>'Cloudwatching', 'description'=> 'Watch the clouds, find the story your maker wants to tell you'],
            ['name'=>'Running', 'description'=> 'Go for a run to clear your mind']
        ];
        $habit= \App\Habit::insert($data);
    }
}
