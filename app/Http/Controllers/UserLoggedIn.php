<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserLoggedIn extends Controller
{
    public function auth(Request $request)
    {
        $client_id = env("CLIENT_ID");
        $secret = env("SECRET_KEY");
        $code = $request->code;
        $url = 'https://www.strava.com/oauth/token?client_id='.$client_id."&client_secret=".$secret."&code=".$code;

        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST',$url );
        if($res->getStatusCode()==200){
            //echo $res->getHeaderLine('content-type');
           // echo $res->getBody();
            $body = $res->getBody();
            $body_array = json_decode($body);
            
            $token = $body_array->access_token;
            $firstName=$body_array->athlete->firstname;
            $lastName=$body_array->athlete->lastname;
            $email=$body_array->athlete->email;
            
            $count = \App\User::where('token', $token)->count();
        
            if($count==0){
            $newUser= new User;
            $newUser->firstName= $firstName;
            $newUser->lastName= $lastName;
            $newUser->email =$email;
            $newUser->token= $token;
            $newUser->save();
            }

        /* $userId = \App\User::where('token','=', $token)->pluck('id');
           $cookie = Cookie::make('userCookie', $userId);
           */
            //dd($token);
           return redirect('/');

        }else{
            echo $res->getStatusCode();
        }
    }
}
