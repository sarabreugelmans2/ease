<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            //echo $res->getBody();
            $body = $res->getBody();
            $body_array = json_decode($body);
            $token = $body_array->access_token;
            //dd($token);
            return redirect('/');
        }else{
            echo $res->getStatusCode();
        }
    }
}
