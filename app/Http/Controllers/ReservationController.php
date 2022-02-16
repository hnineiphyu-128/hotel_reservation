<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Reservation;
use App\User;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reservations = Reservation::all();
        return view('backend.reservation_lists',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $reservation = Reservation::find($id);

        return view('backend.reservation_detail',compact('reservation'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $reservation = Reservation::find($id);

        return view('backend.reservation_edit',compact('reservation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $id = $request->id;
        $id = $request->id;
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
        $user_id = $request->user_id;

        $reservation = Reservation::find($id);
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

        return redirect()->route('backside.reservation.index')->with('successMsg','Existing Reservation is UPDATED from your data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $reservation = Reservation::find($id);

        $reservation->delete();

        return redirect()->route('backside.reservation.index')->with('successMsg','Existing Reservation is DELETED from your data');
    }
}
