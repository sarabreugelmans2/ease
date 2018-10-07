<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
    $relax = new Relax;

    $relax->user_id = $request->name;
    $relax->status= $request->status;
    
    $flight->save();

    
    }
}
