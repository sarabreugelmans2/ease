<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public function habits()
    {
        return $this->belongsTo('App\Habit');
    }
    public function users()
    {
        return $this->belongsToMany('App\User')->using('App\Activity');
    }
}
