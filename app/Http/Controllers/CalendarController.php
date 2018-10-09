<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class CalendarController extends Controller
{
    public function show(){



        return view('calendar');
    }
}
