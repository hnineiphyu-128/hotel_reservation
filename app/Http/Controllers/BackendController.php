<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Reservation;
use App\User;

class BackendController extends Controller
{
    //
    public function index()
    {

    	$today = Date('Y-m-d');
    	$reservations = DB::table('reservations')
    					 ->select('reservations.*')
    					 ->where('reservations.created_at','like',$today.'%')
    					 ->get();
    	return view('backend.dashboard',compact('reservations'));
    }

    public function user_list()
    {
    	# code...
    	$users = User::all();
    	return view('backend.user_list',compact('users'));	
    }
}
