<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\UserStatsClass;

class LoginController extends Controller
{
    public function login()
    {   
        $UserStatsClass = new UserStatsClass();
        $userstats = $UserStatsClass->getTrackedHabitsCount();
        return view('login', $userstats);
    }

   
}
