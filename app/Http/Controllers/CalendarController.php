<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller
{
    public function show()
    {

        //user_id from session
        $userId =Auth::user()->id;

        //get all activities from current user, most recent first
        $collection= \App\Activity::where('user_id', $userId)->orderBy('endTime', 'desc')->get();
        $data['activity']=$collection;

        return view('calendar', $data);

    }
}
