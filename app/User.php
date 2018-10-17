<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
    use AuthenticableTrait;
  
    public function relaxs()
    {
        return $this->hasMany('\App\Relax', 'user_id');
    }

    public function activities(){
        return $this->hasMany('\App\Activity', 'user_id');
    }
}
