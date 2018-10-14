<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterestsController extends Controller
{
    public function index(){
        $data['habits'] = \DB::table('habits')->get();
        return view('interests', $data);
    }
}
