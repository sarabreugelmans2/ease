<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relax;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;


class RelaxController extends Controller
{
    public function relax(){
        
        return view('relax');

    }

    public function store(Request $request){
        //is de POST geldig( niet leeg) 
            $this->validate($request, [
                'status' => 'required'
            ]);
        //get userId from session
        $userId =Auth::user()->id;
        
        //make new row in table relax        
        $relax = new Relax;
        $relax->status= $request->status;
        $relax->user_id=$userId;
        $relax->save();

        return redirect('/');

    
    }
}
