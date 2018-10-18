<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\UserOpinions;



class AdminController extends Controller
{
    public function show()
    {
        // $data['less']=\App\Relax::where('status',0);
        // $data['same']=\App\Relax::where('status',1);
        // $data['more']=\App\Relax::where('status',2);
        //$data['activity']=\App\Relax::where('user_id', $userId)->orderBy('endTime', 'desc')->get();
        $habit1=[];
        $habit2=[];
        $habit3=[];
        $habit4=[];
        $habit5=[];
        $habit6=[];
    for($x=1; $x<=6; $x++){
       
        for($i=0; $i<=2; $i++){
           $h =\App\Relax::where([['status','=',$i],['habit_id','=',$x]])->count();
          
           array_push(${'habit'.$x}, $h);
           $name=\App\Habit::select('name')->where('id','=',$x)->first();
           $name=$name['name'];
        };

        ${'chart'.$x} = new UserOpinions;
        ${'chart'.$x}->labels(['Bad', 'Neutral', 'Awesome']);
        ${'chart'.$x}->displayAxes(false)->options([
            'title' => [
                'text' => $name,
                'display' => true // or false, depending on what you want.
            ]
        ]);
        
        ${'chart'.$x}->dataset('Useropinions', 'doughnut', ${'habit'.$x})->backgroundColor(['#B6B6B7','#4B667F',"#C5E6EE"]);
    }
    
   
        return view('admin', compact('chart1', 'chart2', 'chart3', 'chart4', 'chart5', 'chart6' ));
    }
}
