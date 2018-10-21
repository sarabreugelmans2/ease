<?php

namespace App\Classes;

class UserStatsClass
{
    public function getTrackedHabitsCount(){
        $data['BreathingCount'] = \DB::table('activities')->where("habit_id", "1")->get()->count();
        $data['WalkingCount'] = \DB::table('activities')->where("habit_id", "2")->get()->count();
        $data['StargazingCount'] = \DB::table('activities')->where("habit_id", "3")->get()->count();
        $data['CloudwatchingCount'] = \DB::table('activities')->where("habit_id", "4")->get()->count();
        $data['RunningCount'] = \DB::table('activities')->where("habit_id", "5")->get()->count();
        $data['OutsideCount'] = \DB::table('activities')->where("habit_id", "6")->get()->count();
        return $data;
    }
    
}
