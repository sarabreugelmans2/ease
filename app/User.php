<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
    use AuthenticableTrait;
   /*public function episodes()
    {
        //return $this->belongsToMany('App\Episode', 'Activity')->using('App\Activity');
        return $this->belongsToMany('App\Episode', 'Activity')->withPivot('firstName', 'lastName');

        return $this->belongsToMany('App\Habit', 'Activity')->withPivot('firstName', 'lastName');
    }
   */
    public function relaxs()
    {
        return $this->hasMany('\App\Relax');
    }

    public function activities(){
        return $this->hasMany('\App\Activity', 'user_id');
    }
}
