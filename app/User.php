<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    
    public function episodes()
    {
        return $this->belongsToMany('App\Episode')->using('App\Activity');
    }
   
    public function relaxs()
    {
        return $this->hasMany('App\Relax');
    }
}
