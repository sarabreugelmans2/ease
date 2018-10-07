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
        $data = array(
            array('name'=>'Breathing', 'description'=> 'Breathe in and out, and in and out, and in ...'),
            array('name'=>'Walking', 'description'=> 'Go outside and take a walk'),
            array('name'=>'Stargazing', 'description'=> 'Gaze at the stars, get lost in the mistery of the universe'),
            array('name'=>'Cloudwatching', 'description'=> 'Watch the clouds')
        );
        $habit= \App\Habit::insert($data);
    }
}
