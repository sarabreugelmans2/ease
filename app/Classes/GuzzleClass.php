<?php

namespace App\Classes;

use Illuminate\Support\Facades\Auth;

class GuzzleClass
{
    public function GuzzleRequest($method,$url,$auth = NULL, $query=NULL, $header =NULL){
        $client = new \GuzzleHttp\Client();
        $res = $client->request($method, $url, [ 'auth' => [ null , $auth], 'query' => $query]);
        if($res->getStatusCode()==200){
            $body = $res->getBody();
            $body_array = json_decode($body);
            return $body_array;

        }else{
            return $res->getStatusCode();
        }
    }
    
}
