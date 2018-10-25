<?php

namespace App\Classes;

use Illuminate\Support\Facades\Auth;

class GuzzleClass
{
    private $statusCode = "";
    
    public function request($method, $url, $headers =NULL, $query=NULL){
        $client = new \GuzzleHttp\Client();
        $res = $client->request($method, $url, ['headers' => $headers ,'query' => $query]);
        if($res->getStatusCode()==200){
            $body = $res->getBody();
            $body_array = json_decode($body);
            return $body_array;

        }else{
            $this->statusCode = $res->getStatusCode();
            return false;
        }
    }
    public function getStatusCode() {
        return $this->statusCode;
    }
    
}
