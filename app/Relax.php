<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relax extends Model
{
    
    public function relaxs()
    {
        return $this->belongsTo('App\User');
    }
}
