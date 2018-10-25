<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\UserOpinions;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    public function show()
    {
        //Habit::all() 
        // foreach habits as habit
        //relax where habit_id is habit->id
        $habit1=[];
        $habit2=[];
        $habit3=[];
        $habit4=[];
        $habit5=[];
        $habit6=[];

        for($x=1; $x<=6; $x++){
            for($i=0; $i<=2; $i++){
            //neem per status het aantal habits van id=x en tel ze
                $h =\App\Relax::where([['status','=',$i],['habit_id','=',$x]])->count();
            array_push(${'habit'.$x}, $h);
            
            //name of habbit uit db halen
            $name=\App\Habit::select('name')->where('id','=',$x)->first();
            $name=$name['name'];
            };

            //maak een nieuwe chart aan
        ${'chart'.$x} = new UserOpinions;
        ${'chart'.$x}->labels(['Bad', 'Neutral', 'Awesome']);
        //toon de titel en verwijder de achtergrond
        ${'chart'.$x}->displayAxes(false)->options([
            'title' => [
                'text' => $name,
                'display' => true
            ]
        ]);
            //voeg data van querie toe aan chart + geeft kleurtjes
        ${'chart'.$x}->dataset('Useropinions', 'doughnut',${'habit'.$x})->backgroundColor(['#DA696E','#B6B6B7',"#D7E183"]);
        }
        
            //geef de gemaakte charts aan de view
        return view('admin', compact('chart1', 'chart2','chart3', 'chart4', 'chart5', 'chart6' ));
    }
}
