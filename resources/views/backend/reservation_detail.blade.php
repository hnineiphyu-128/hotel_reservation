<x-backend>

	<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Detail of reservation</h1>
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
			<fieldset class="border border-dark p-3  my-4">
				<legend  class="w-auto" style="border: 2px solid #272c33; background-color: #272c33; color: #fff; padding: 5px 15px;">Reservation Details</legend>
				<div class="">
					<div class="col-md-6 mb-3">
						<div class="col-md-6">
							<label>First name</label>
						</div>
						<div class="col-md-6">
							<label>{{ $reservation->first_name }}</label>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="col-md-6">
							<label>Last name</label>
						</div>
						<div class="col-md-6">
							<label>{{ $reservation->last_name }}</label>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="col-md-6">
							<label>Address</label>
						</div>
						<div class="col-md-6">
							<label>{{ $reservation->address }}</label>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="col-md-6">
							<label>Zip Code</label>
						</div>
						<div class="col-md-6">
							<label>{{ $reservation->zip_code }}</label>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="col-md-6">
							<label>City</label>
						</div>
						<div class="col-md-6">
							<label>{{ $reservation->city }}</label>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="col-md-6">
							<label>State</label>
						</div>
						<div class="col-md-6">
							<label>{{ $reservation->state }}</label>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="col-md-6">
							<label>Email</label>
						</div>
						<div class="col-md-6">
							<label>{{ $reservation->email }}</label>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="col-md-6">
							<label>Phone</label>
						</div>
						<div class="col-md-6">
							<label>{{ $reservation->phone }}</label>
						</div>
					</div>
				</div>
			</fieldset>
			<fieldset class="border border-dark p-3 my-4">
				<legend  class="w-auto" style="border: 2px solid #272c33; background-color: #272c33; color: #fff; padding: 5px 15px;">Dates</legend>
				<div class="">
					<div class="col-md-6 mb-3">
						<div class="col-md-6">
							<label>Check In Date</label>
						</div>
						<div class="col-md-6">
							<label>{{ $reservation->check_in_date }}</label>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="col-md-6">
							<label>Check Out Date</label>
						</div>
						<div class="col-md-6">
							<label>{{ $reservation->check_out_date }}</label>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="col-md-6">
							<label>Check In Time</label>
						</div>
						<div class="col-md-6">
							<label>{{ $reservation->check_in_time }}</label>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="col-md-6">
							<label>Check Out Time</label>
						</div>
						<div class="col-md-6">
							<label>{{ $reservation->check_out_time }}</label>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="col-md-6">
							<label>Numner of adult</label>
						</div>
						<div class="col-md-6">
							<label>{{ $reservation->no_of_adult }}</label>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="col-md-6">
							<label>Number of children</label>
						</div>
						<div class="col-md-6">
							<label>{{ $reservation->no_of_children }}</label>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="col-md-6">
							<label>Number of rooms</label>
						</div>
						<div class="col-md-6">
							<label>{{ $reservation->no_of_room }}</label>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="col-md-6">
							<label>Room Types </label>
						</div>
						<div class="col-md-6">
							<label>{{ $reservation->room_type_1 }} | {{ $reservation->room_type_2 }}</label>
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="col-md-6">
							<label>Special Instructions</label>
						</div>
						<div class="col-md-6">
							<label>{{ $reservation->instruction }}</label>
						</div>
					</div>
			</fieldset>
</x-backend>