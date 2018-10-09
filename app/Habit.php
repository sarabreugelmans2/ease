<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    public function episodes()
    {
        return $this->hasMany('\App\Episode');
    }
    /*public function users()
    {
        //return $this->belongsToMany('App\User', 'Activity')->using('App\Activity');
        return $this->belongsToMany('App\User', 'Activity')->withPivot('name');
}*/

    public function activities(){
        return $this->hasMany('\App\Activity','habit_id');
    }
}
