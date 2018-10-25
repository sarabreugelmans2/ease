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
        $activities= Activity::where('user_id', $userId)->get();


        $events = [];

        //for each activity set an event in the calendar
        foreach($activities as $a){
            $events[] = \Calendar::event(
                $a->habit->name,
                true,
                new \DateTime($a->endTime),
                new \DateTime($a->endTime),
                null,
                // Add color on event
                [
                    'color' => '#C5E6EE'
                ]
            );
        }
        //add the events to the calendar
        $calendar = \Calendar::addEvents($events)->setOptions(['defaultView '=>'WeekView',
        'header' =>
                    [
                        'left' => 'prev,next today',
                        'right' => 'title',
                        'center' =>false
                    ]
        ]
        );
        //return the calendar
        return view('calendar',compact('calendar'));

    }
}
