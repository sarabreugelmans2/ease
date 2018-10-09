<?php

namespace App;

/*
use Illuminate\Database\Eloquent\Relations\Pivot;

class Activity extends Pivot
{
    public $timestamps = false;
}*/


use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public $timestamps = false;
    public function episode()
    {
        return $this->belongsTo('\App\Episode');
    }
    public function user()
    {
        return $this->belongsTo('\App\User');
    }
    public function habit()
    {
        return $this->belongsTo('\App\Habit');
    }
}
