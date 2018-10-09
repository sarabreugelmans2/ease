<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public function habit()
    {
        return $this->belongsTo('\App\Habit');
    }
    /*public function users()
    {
        //return $this->belongsToMany('App\User', 'Activity')->using('App\Activity');
        return $this->belongsToMany('App\User', 'Activity')->withPivot('duration', 'name');
}*/

    public function activities(){
        return $this->hasMany('\App\Activity', 'episode_id');
    }
}
