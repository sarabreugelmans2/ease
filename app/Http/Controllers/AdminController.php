<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show()
    {
        // $data['less']=\App\Relax::where('status',0);
        // $data['same']=\App\Relax::where('status',1);
        // $data['more']=\App\Relax::where('status',2);
        $data['activity']=\App\Relax::where('user_id', $userId)->orderBy('endTime', 'desc')->get();

        return view('calendar', $data);
        return view('admin');
    }
}
