<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public $table = "episode";
    public function activity()
    {
        return $this->belongsTo('App\Activity');
    }
    public function users()
    {
        return $this->belongsToMany('App\User')->using('App\Activity');
    }
}
