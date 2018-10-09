<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relax;



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

    $relax->status= $request->status;
    //hardcoded->uit een koekje halen?
    $relax->user_id=1;
    $relax->save();

    return redirect('/');

    
    }
}
