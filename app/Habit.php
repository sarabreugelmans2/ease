<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{

    public function activities(){
        return $this->hasMany('\App\Activity','habit_id');
    }

}
