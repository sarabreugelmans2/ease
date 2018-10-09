<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class CalendarController extends Controller
{
    public function show(){

     //user_id uit koekje
    $collection= \App\Activity::where('user_id', 5)->orderBy('endTime', 'desc')->get();
   
    $data['activity']=$collection;
    return view('calendar', $data);
    }
}
