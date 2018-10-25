<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\Classes\StravaApiClass;
use Illuminate\Support\Facades\Auth;

class StravaApiController extends Controller
{
    public function update(){
        $StravaApi = new StravaApiClass();
        if($StravaApi->update()){
            return redirect('/');
        }else{
            
        }
        
        
    }
    
}
