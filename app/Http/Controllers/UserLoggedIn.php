<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
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
            
            //haal user met token(url) uit de db
            $user = \App\User::where('token', $token)->first();
            
            //als de user niet bestaat, maak een nieuwe aan
            if($user== NULL){
                $user= new User;
                $user->firstName= $firstName;
                $user->lastName= $lastName;
                $user->email =$email;
                $user->token= $token;
                $user->save();
            }

            //log existing user in app
            \Auth::login($user);
           
             return redirect('/');

        }else{
            echo $res->getStatusCode();
        }
    }
}
