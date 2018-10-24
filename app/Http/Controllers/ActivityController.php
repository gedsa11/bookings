<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

class ActivityController extends Controller
{
 	public function index(Request $request = null )
    {
        
        $activities = Activity::all();
        return view('activities.index', compact('activities'));
    }

    public function show( $slug )
    {
       $activity = Activity::where('slug','=', $slug)->firstOrFail();
        
       return view('activities.show',compact('activity'));
    }   
}
