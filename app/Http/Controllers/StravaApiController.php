<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use Illuminate\Support\Facades\Auth;

class StravaApiController extends Controller
{
    public function update(){
        //user_id from session
        $user =  Auth::user();
        // dd($user);
        
        $url = 'https://www.strava.com/api/v3/athlete/activities?access_token='.$user->token;
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET',$url );
        if($res->getStatusCode()==200){
            $body = $res->getBody();
            $body_array = json_decode($body);

            foreach($body_array as $key => $resource){
                $type = $resource->type;
                $strava_id = $resource->id;
                $start_time = strtotime($resource->start_date);
                $start = date("Y-m-d h:i:s", $start_time);
                $end = date("Y-m-d H:i:s", strtotime('+'.$resource->elapsed_time.' seconds',$start_time));
                
                if(!in_array($type, array("Yoga", "Workout", "StairStepper", "WeightTraining", "Crossfit","Handcycle"))){
                    $activity = \App\Activity::where('strava_id', $strava_id)->first();
                    if($activity== NULL){
                        $activity = new Activity;
                    }
                    if($type == "Run"){  
                        $activity->habit_id = 5;
                        echo("run ");
                    }else if($type == "Walk"){
                        $activity->habit_id = 2;
                        echo("walk ");
                    }else{
                        $activity->habit_id = 6;
                        echo("ander ");
                    }
                    $activity->strava_id = $strava_id;
                    $activity->user_id=$user->id;
                    $activity->startTime = $start;
                    $activity->endTime = $end;
                    $activity->finished = true;
                    $activity->save();
                    echo("succes  ");
                }else{
                    echo("Not outside");
                }
            };

            
            
            

        }else{
            echo $res->getStatusCode();
        }

        //dd($body_array);


        return redirect('/');
    }
    
}
