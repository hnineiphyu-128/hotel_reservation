<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    //
     protected $fillable=[
    	'first_name','last_name','address','zip_code','city','state','email','phone','check_in_date','check_out_date','check_in_time','check_out_time','no_of_adult','no_of_children','no_of_room','room_type_1','room_type_2','instruction','user_id'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
