<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use App\User;
use App\Classes\GuzzleClass;


class UserLoggedIn extends Controller
{
    public function auth(Request $request)
    {
        $client_id = env("CLIENT_ID");
        $secret = env("SECRET_KEY");
        $code = $request->code;
        $guzzle = new GuzzleClass();
        $headers =[];
        $query= ['client_id' => $client_id, "client_secret" => $secret, "code" => $code];
        $res = $guzzle->request("POST", 'https://www.strava.com/oauth/token',$headers,$query);

        if($res){
            //echo $res->getHeaderLine('content-type');
           // echo $res->getBody();            
            $token = $res->access_token;
            $firstName=$res->athlete->firstname;
            $lastName=$res->athlete->lastname;
            $email=$res->athlete->email;
            
            //haal user met token(url) uit de db
            $user = \App\User::where('token', $token)->first();
            $newuser = false;
            //als de user niet bestaat, maak een nieuwe aan
            if($user== NULL){
                $user= new User;
                $user->firstName= $firstName;
                $user->lastName= $lastName;
                $user->email =$email;
                $user->token= $token;
                $user->save();
                $newuser = true;
            }

            //log existing user in app
            \Auth::login($user);
           
            if($newuser){
                return redirect('/interests');
            }else{
                return redirect('/');
            }
             

        }else{
            echo $res->getStatusCode();
        }
    }

    public function logout(Request $request){
       
        $request->session()->flush();
        return redirect('/login');
      
    }
}
