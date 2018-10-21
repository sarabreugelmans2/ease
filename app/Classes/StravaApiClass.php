<?php

namespace App\Classes;

use App\Activity;
use Illuminate\Support\Facades\Auth;

class StravaApiClass
{
    public function getUserStats(){
        //user_id from session
        $user =  Auth::user();
        
        
        //get all athlete info
        $url = 'https://www.strava.com/api/v3/athlete?access_token='.$user->token;
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET',$url );
        if($res->getStatusCode()==200){
            $body = $res->getBody();
            $body_array = json_decode($body);
            
            //get activitys
            $athlete_id = $body_array->id;
            $url = 'https://www.strava.com/api/v3/athletes/'. $athlete_id .'/stats?access_token='.$user->token;
            $client = new \GuzzleHttp\Client();
            $res = $client->request('GET',$url );
            if($res->getStatusCode()==200){
                $body = $res->getBody();
                $body_array = json_decode($body);
                return $body_array;
            }

        }else{
            return $res->getStatusCode();
        }
    }
    
}
