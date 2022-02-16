<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Reservation;
use App\User;

class FrontendController extends Controller
{
    //
    public function index()
    {
    	return view('frontend.index');
    }
    public function booking()
    {

        return view('frontend.reservation');
    }
    public function store_booking(Request $request)
    {
        $validator=$request->validate([
            'zip_code' => 'required|numeric|min:0|not_in:0'
        ]);

        if($validator)
        {
            $first_name = $request->first_name;
            $last_name = $request->last_name;
            $address = $request->address;
            $zip_code = $request->zip_code;
            $city = $request->city;
            $state = $request->state;
            $email = $request->email;
            $phone = $request->phone;
            $check_in_date = $request->check_in_date;
            $check_out_date = $request->check_out_date;
            $check_in_time = $request->check_in_time;
            $check_out_time = $request->check_out_time;
            $no_of_adult = $request->no_of_adult;
            $no_of_children = $request->no_of_children;
            $no_of_room = $request->no_of_room;
            $room_type_1 = $request->room_type_1;
            $room_type_2 = $request->room_type_2;
            $instruction = $request->instruction;

            $user = Auth::user();
            // dd($user);
            $user_id = $user->id;

            $reservation = new Reservation();
            $reservation->first_name = $first_name;
            $reservation->last_name = $last_name;
            $reservation->address = $address;
            $reservation->zip_code = $zip_code;
            $reservation->city = $city;            
            $reservation->state = $state;            
            $reservation->email = $email;            
            $reservation->phone = $phone;            
            $reservation->check_in_date = $check_in_date;            
            $reservation->check_out_date = $check_out_date;            
            $reservation->check_in_time = $check_in_time;            
            $reservation->check_out_time = $check_out_time;            
            $reservation->no_of_adult = $no_of_adult;            
            $reservation->no_of_children = $no_of_children;            
            $reservation->no_of_room = $no_of_room;            
            $reservation->room_type_1 = $room_type_1;            
            $reservation->room_type_2 = $room_type_2;            
            $reservation->instruction = $instruction;            
            $reservation->user_id = $user_id;            

            $reservation->save();
            // dd($reservation);

            return view('frontend.bookingsuccess',compact('reservation'));
        }else{
            return redirect::back()->withErrors($validator);
        }
    }
    public function bookingsuccess()
    {
    	return view('frontend.bookingsuccess');
    }
}
