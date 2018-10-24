<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use App\Booking;
use DB;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function store( Request $request )
    {
    	//consultar precio de la actividad
    	$activity = Activity::findOrFail($request->activity_id);
    	$price	  =$activity->price;

    	//precio total de la reserva
    	$total_price = ($price * $request->people_number);
    	$date = Carbon::createFromFormat('d/m/Y', $request->date)->format('Y-m-d');
    	
    	$booking=array(
                'date' => $date,
                'people_number' => $request->people_number,
                'total_price' => $total_price,
                'activity_id' => $request->activity_id
            );

    	//$booking->save();
    	DB::table('bookings')->insert($booking);

    	return redirect()->route('index_bookings');
    	
    }

    public function index(){

    	//retornar todas las reservas
    	$bookings = Booking::orderBy('id','desc')->paginate(10);
    	
        return view('bookings.index', compact('bookings'));
    }
}
