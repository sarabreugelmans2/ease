<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;

use App\User_habit;

class InterestsController extends Controller
{
    public function index(){
        $data['habits'] = \DB::table('habits')->get();
        return view('interests', $data);
    }

    public function save(Request $request){
        $this->validate($request, [
            'habits' => 'required'
        ]);
        $habits = $request->habits;
        $habit_count = count($habits);
        $userId =Auth::user()->id;
        
        if($habit_count < 4){
            return back()->withError('You have only selected '.$habit_count.' of 4 habits')  ;      
        }

        \App\user_habit::where('user_id', $userId)->delete();
        foreach($habits as $habitId){
            $habit = new User_habit;
            $habit->user_id = $userId;
            $habit->habit_id = $habitId;
            $habit->save();
        }

        return redirect('/');
    }
}
