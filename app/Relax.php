<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relax extends Model
{
    
    public function user()
    {
        return $this->belongsTo('\App\User');
    }

     
    public function habit()
    {
        return $this->belongsTo('\App\Habit');
    }
}
