<x-frontend>
    <section class="breadcrumb-section set-bg subtitle">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text mt-4">
                        <h1>Booking Success!!</h1>
						<p>Thank you for your reservation.Have a good day.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

	<div class="container mt-3">
		<div class="row">
			<div class="col">
				@php 
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
				@endphp
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pt-5">
					<div class="shadow p-5 mb-5 bg-white rounded row text-justify">
							<div class="col-md-6">
							First Name - {{ $first_name }}  
							<br>
							Last Name - {{ $last_name }}  
							<br>
							Address - {{ $address }} 
							<br>
							Zip Code - {{ $zip_code }}  
							<br>
							City - {{ $city }}  
							<br>
							State - {{ $state }} 
							<br>
							Email - {{ $email }}  
							<br>
							Phone - {{ $phone }}  
						</div>	
						<div class="col-md-6">
							Check In Date - {{ $check_in_date }} & Check Out Date - {{ $check_out_date }}<br>
							Check In Time - {{ $check_in_time }} & Check Out Time - {{ $check_out_time }}<br>
							Number of adults - {{ $no_of_adult }} 
							<br>
							Number of children - {{ $no_of_children }} 
							<br>
							Number of room - {{ $no_of_room }} 
							<br>
							Room Type 1- {{ $room_type_1 }} & Room Type 2 - {{ $room_type_2 }}
							<br>
							Special Instructions - {{ $instruction }} 
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
</x-frontend>