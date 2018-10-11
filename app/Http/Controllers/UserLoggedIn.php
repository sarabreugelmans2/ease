<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
//use App\Http\Controllers\Auth\LoginController;
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
            
            $user = \App\User::where('token', $token)->first();
            
            if($user== NULL){
                $user= new User;
                $user->firstName= $firstName;
                $user->lastName= $lastName;
                $user->email =$email;
                $user->token= $token;
                $user->save();
            }

            // zoek user op basis van token
            // niet tellen, maar wel de user opvangen in $user
            // $user = 
            // null vs. User
           // Auth::login($user);

       // $userId = \App\User::where('token','=', $token)->pluck('id');
           
        
        return redirect('/');

        }else{
            echo $res->getStatusCode();
        }
    }
}
