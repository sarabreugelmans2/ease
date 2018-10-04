<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    public $table = "habit";
    public function episodes()
    {
        return $this->hasMany('App\Episode');
    }
}
