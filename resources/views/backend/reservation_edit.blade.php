<x-backend>
	{{-- Content --}}
	<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Reservation Edit Form</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <a href="{{route('backside.reservation.index')}}" class="btn btn-outline-info rounded"><i class="fa fa-backward"></i>&nbsp; Back</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">

            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center">Reservation Editting Form</h3>
                                        </div>
                                        <hr>
                                        @php
                                        	$id = $reservation->id;
                                        	$first_name = $reservation->first_name;
                                        	$last_name = $reservation->last_name;
                                        	$address = $reservation->address;
                                        	$zip_code = $reservation->zip_code;
                                        	$city = $reservation->city;
                                        	$state = $reservation->state;
                                        	$email = $reservation->email;
                                        	$phone = $reservation->phone;
                                        	$check_in_date = $reservation->check_in_date;
                                        	$check_out_date = $reservation->check_out_date;
                                        	$check_in_time = $reservation->check_in_time;
                                        	$check_out_time = $reservation->check_out_time;
                                        	$no_of_adult = $reservation->no_of_adult;
                                        	$no_of_children = $reservation->no_of_children;
                                        	$no_of_room = $reservation->no_of_room;
                                        	$room_type_1 = $reservation->room_type_1;
                                        	$room_type_2 = $reservation->room_type_2;
                                        	$instruction = $reservation->instruction;
                                        	$user_id = $reservation->user_id;
                                        @endphp
                                        <form action="{{route('backside.reservation.update',$id)}}" method="post" novalidate="novalidate">
                                           @csrf
                                           @method('PUT')

                                            <input type="hidden" id="id" name="id" value="{{ $id }}">                                           
                                            <input type="hidden" id="user_id" name="user_id" value="{{ $user_id }}">                                           
                                            <div class="form-row">
	                                           	<div class="col-md-6 mb-3">
	                                           		<label for="validationCustom01">First name</label><span class="text-danger">*</span>
	                                           		<input type="text" class="form-control" name="first_name" id="validationCustom01" value="{{ $first_name }}">
	                                           	</div>
	                                           	<div class="col-md-6 mb-3">
	                                           		<label for="validationCustom02">Last name</label><span class="text-danger">*</span>
	                                           		<input type="text" class="form-control"  name="last_name" id="validationCustom02" value="{{ $last_name }}">
	                                           	</div>
                                            </div>
                                            <div class="form-row">
	                                           	<div class="col-md-6 mb-3">
	                                           		<label for="validationCustom01">Address</label><span class="text-danger">*</span>
	                                           		<input type="text" class="form-control" name="address" id="validationCustom01" value="{{ $address }}">
	                                           	</div>
	                                           	<div class="col-md-6 mb-3">
	                                           		<label for="validationCustom02">Zip Code</label><span class="text-danger">*</span>
	                                           		<input type="text" class="form-control" name="zip_code" id="validationCustom02" value="{{ $zip_code }}">
	                                           	</div>
                                            </div>
                                            <div class="form-row">
	                                           	<div class="col-md-6 mb-3">
	                                           		<label for="validationCustom01">City</label><span class="text-danger">*</span>
	                                           		<input type="text" class="form-control" name="city" id="validationCustom01" value="{{ $city }}">
	                                           	</div>
	                                           	<div class="col-md-6 mb-3">
	                                           		<label for="validationCustom02">State</label><span class="text-danger">*</span>
	                                           		<input type="text" class="form-control" name="state" id="validationCustom02" value="{{ $state }}">
	                                           	</div>
                                            </div>
                                            <div class="form-row">
	                                           	<div class="col-md-6 mb-3">
	                                           		<label for="validationCustom01">Email Address</label><span class="text-danger">*</span>
	                                           		<input type="email" class="form-control" name="email" id="validationCustom01" value="{{ $email }}">
	                                           	</div>
	                                           	<div class="col-md-6 mb-3">
	                                           		<label for="validationCustom02">Phone</label><span class="text-danger">*</span>
	                                           		<input type="text" class="form-control" name="phone" id="validationCustom02" value="{{ $phone }}">
	                                           	</div>
                                            </div>
                                            <div class="form-row">
                                            	<div class="col-md-6 mb-3">
                                            		<label for="validationCustom04">Check In Date</label><span class="text-danger">*</span>
                                            		<input type="Date" class="form-control" id="validationCustom02" name="check_in_date" value="{{ $check_in_date }}">
                                            	</div>
                                            	<div class="col-md-6 mb-3">
                                            		<label for="validationCustom04">Check Out Date</label><span class="text-danger">*</span>
                                            		<input type="Date" class="form-control"id="validationCustom02" name="check_out_date" value="{{ $check_out_date }}">
                                            	</div>
                                            </div>
                                            <div class="form-row">
                                            	<div class="col-md-6 mb-3">
                                            		<label for="validationCustom03">Check In Time</label>
                                            		<select class="custom-select" id="validationCustom04" name="check_in_time">
                                            			<option value="{{ $check_in_time }}" selected="">{{ $check_in_time }}</option>
                                            			<option>Morning</option>
                                            			<option>Afternoon</option>
                                            			<option>Evening</option>
                                            		</select>
                                            	</div>
                                            	<div class="col-md-6 mb-3">
                                            		<label for="validationCustom03">Check Out Time</label>
                                            		<select class="custom-select" id="validationCustom04" name="check_out_time">
                                            			<option value="{{ $check_out_time }}" selected="">{{ $check_out_time }}</option>
                                            			<option>Morning</option>
                                            			<option>Afternoon</option>
                                            			<option>Evening</option>
                                            		</select>
                                            	</div>
                                            </div>
                                            <div class="form-row">
                                            	<div class="col-md-6 mb-3">
                                            		<label for="validationCustom03">How many adults are coming?</label>
                                            		<select class="custom-select" id="validationCustom04" name="no_of_adult">
                                            			<option value="{{ $no_of_adult }}" selected="">{{ $no_of_adult }}</option>
                                            			<option>1</option>
                                            			<option>2</option>
                                            			<option>3</option>
                                            			<option>4</option>
                                            			<option>5</option>
                                            		</select>
                                            	</div>
                                            	<div class="col-md-6 mb-3">
                                            		<label for="validationCustom03">How many children are coming?</label>
                                            		<select class="custom-select" id="validationCustom04" name="no_of_children">
                                            			<option value="{{ $no_of_children }}" selected="">{{ $no_of_children }}</option>
                                            			<option>0</option>
                                            			<option>1</option>
                                            			<option>2</option>
                                            			<option>3</option>
                                            			<option>4</option>
                                            			<option>5</option>
                                            		</select>
                                            	</div>
                                            </div>
                                            <div class="form-row">
                                            	<div class="col-md-12 mb-3">
                                            		<label for="validationCustom01">Number of rooms</label>
                                            		<input type="text" class="form-control" name="no_of_room" id="validationCustom01" value="{{ $no_of_room }}">
                                            	</div>
                                            </div>
                                            <div class="form-row">
                                            	<div class="col-md-6 mb-3">
                                            		<label for="validationCustom03">Room Type 1</label>
                                            		<select class="custom-select" id="validationCustom04" name="room_type_1">
                                            			<option value="{{ $room_type_1 }}" selected="">{{ $room_type_1 }}</option>
                                            			<option>Standard</option>
                                            			<option>Deluxe</option>
                                            			<option>Suite</option>
                                            		</select>
                                            	</div>
                                            	<div class="col-md-6 mb-3">
                                            		<label for="validationCustom03">Room Type 2</label>
                                            		<select class="custom-select" id="validationCustom04" name="room_type_2">
                                            			<option value="{{ $room_type_2 }}" selected="">{{ $room_type_2 }}</option>
                                            			<option>Standard</option>
                                            			<option>Deluxe</option>
                                            			<option>Suite</option>
                                            		</select>
                                            		<div class="invalid-feedback">
                                            			Please provide a valid city. 
                                            		</div>
                                            	</div>
                                            </div>
                                            <div class="mb-3">
                                            	<label for="validationTextarea">Special Instructions</label>
                                            	<textarea class="form-control" id="validationTextarea" name="instruction" disabled="disabled" rows="4"> 	{{ $instruction }}
                                            	</textarea>
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-save"></i>&nbsp;
                                                    Update
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div>

</x-backend>