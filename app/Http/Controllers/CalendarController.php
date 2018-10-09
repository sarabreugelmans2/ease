<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class CalendarController extends Controller
{
    public function show(){

        //id uit koekje
      $collection= \App\Activity::where('user_id', 5)->orderBy('endTime', 'desc')->get();
      echo $collection->habits->name;
      //dd($collection);
      // $data['activity']=$collection;
       // return view('calendar', $data);
    }
}
