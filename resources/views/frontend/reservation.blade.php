<!DOCTYPE html>
<html>
<head>
	<title>Reservation Form</title>

	<!-- call bootstrap css -->
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">

	<!-- call jq -->
	<script type="text/javascript" src="{{asset('frontend/jquery/jquery.min.js')}}"></script>

	<!-- call js -->
	<script type="text/javascript" src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
	<style type="text/css">
		.form-submit {
			display: inline-block;
		  	background: #900603;
		  	color: #fff;
		  	border-bottom: none;
		  	width: auto;
		  	padding: 10px 30px;
		  	border-radius: 5px;
		  	-moz-border-radius: 5px;
		  	-webkit-border-radius: 5px;
		  	-o-border-radius: 5px;
		  	-ms-border-radius: 5px;
		  	margin-top: 25px;
		  	cursor: pointer; 
		  }
		  	.form-submit:hover {
		    background: #A91B0D;
		  	color: #fff; 
		}
		.txt-color{
			color: #900603;
		}
		.focus-color:focus{
			border-color: #900603;
			box-shadow: none;
		}
	</style>
</head>
<body>
	<div class="container-fluid my-2 py-2">
		
		<div style=" border: all; border-style: solid; border-color: #900603; padding: 28px 28px; margin-top: 20px;">
			<div class="py-5 mb-3" style="background-color: #900603;">
				<h2 class="text-light text-center py-5 px-5 mt-0">Hotel Reservation Form</h2>
			</div>

			<form class="needs-validation" novalidate action="{{ route('store_booking')}}" method="POST">
				@csrf
				<fieldset class="border border-dark p-3  my-4">
					<legend  class="w-auto" style="border: 2px solid #900603; background-color: #900603; color: #fff; padding: 5px 15px;">Reservation Details</legend>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom01">First name</label><span class="text-danger">*</span>
							<input type="text" class="form-control focus-color" name="first_name" id="validationCustom01" required>
							<div class="invalid-feedback">
								Please enter your first name.
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom02">Last name</label><span class="text-danger">*</span>
							<input type="text" class="form-control focus-color"  name="last_name" id="validationCustom02" required>
							<div class="invalid-feedback">
								Please enter your last name.
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom01">Address</label><span class="text-danger">*</span>
							<input type="text" class="form-control focus-color" name="address" id="validationCustom01" required>
							<div class="invalid-feedback">
								Please enter your address.
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom02">Zip Code</label><span class="text-danger">*</span>
							<input type="text" class="form-control focus-color" name="zip_code" id="validationCustom02" required>
							<div class="invalid-feedback">
								Please enter your Zip Code.
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom01">City</label><span class="text-danger">*</span>
							<input type="text" class="form-control focus-color" name="city" id="validationCustom01" required>
							<div class="invalid-feedback">
								Please enter your city.
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom02">State</label><span class="text-danger">*</span>
							<input type="text" class="form-control focus-color" name="state" id="validationCustom02" required>
							<div class="invalid-feedback">
								Please enter your state.
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom01">Email Address</label><span class="text-danger">*</span>
							<input type="email" class="form-control focus-color" name="email" id="validationCustom01" required>
							<div class="invalid-feedback">
								Please enter your email.
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom02">Phone</label><span class="text-danger">*</span>
							<input type="text" class="form-control focus-color" name="phone" id="validationCustom02" required>
							<div class="invalid-feedback">
								Please enter your phone.
							</div>
						</div>
					</div>
				</fieldset>
				<fieldset class="border border-dark p-3">
					<legend  class="w-auto" style="border: 2px solid #900603; background-color: #900603; color: #fff; padding: 5px 15px;">Dates</legend>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom04">Check In Date</label><span class="text-danger">*</span>
							<input type="Date" class="form-control focus-color" id="validationCustom02" name="check_in_date" required>
							<div class="invalid-feedback">
								Please select a valid state.
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom04">Check Out Date</label><span class="text-danger">*</span>
							<input type="Date" class="form-control focus-color"id="validationCustom02" name="check_out_date" required>
							<div class="invalid-feedback">
								Please select a valid state.
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom03">Check In Time</label>
							<select class="custom-select focus-color" id="validationCustom04" name="check_in_time" required>
								<option selected disabled value="">Select Time</option>
								<option>Morning</option>
								<option>Afternoon</option>
								<option>Evening</option>
							</select>
							<div class="invalid-feedback">
								Please provide a valid city. 
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom03">Check Out Time</label>
							<select class="custom-select focus-color" id="validationCustom04" name="check_out_time" required>
								<option selected disabled value="">Select Time</option>
								<option>Morning</option>
								<option>Afternoon</option>
								<option>Evening</option>
							</select>
							<div class="invalid-feedback">
								Please provide a valid city. 
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom03">How many adults are coming?</label>
							<select class="custom-select focus-color" id="validationCustom04" name="no_of_adult" required>
								<option selected disabled value="">Number of adults</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							<div class="invalid-feedback">
								Please provide a valid city. 
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom03">How many children are coming?</label>
							<select class="custom-select focus-color" id="validationCustom04" name="no_of_children" required>
								<option selected disabled value="">Number of children</option>
								<option>0</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
							<div class="invalid-feedback">
								Please provide a valid city. 
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-12 mb-3">
							<label for="validationCustom01">Number of rooms</label>
							<input type="text" class="form-control focus-color" name="no_of_room" id="validationCustom01" required>
							<div class="invalid-feedback">
								Please enter number of rooms.
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationCustom03">Room Type 1</label>
							<select class="custom-select focus-color" id="validationCustom04" name="room_type_1" required>
								<option selected value=""></option>
								<option>Standard</option>
								<option>Deluxe</option>
								<option>Suite</option>
							</select>
							<div class="invalid-feedback">
								Please provide a valid city. 
							</div>
						</div>
						<div class="col-md-6 mb-3">
							<label for="validationCustom03">Room Type 2</label>
							<select class="custom-select focus-color" id="validationCustom04" name="room_type_2">
								<option selected value=""></option>
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
						<textarea class="form-control focus-color" id="validationTextarea" name="instruction" rows="4"></textarea>
					</div>
				</fieldset>
				<div class="text-center">
					@if(Auth::check())

						<input type="submit" class="btn form-submit" id="btnSave" name="btnSave" value="Submit Form">

                    @else

                        <a href="{{route('login')}}" class="btn form-submit">Submit Form</a>

                    @endif

				</div>
			</form>
		</div>
	</div>

	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
		(function() {
			'use strict';
			window.addEventListener('load', function() {
		    // Fetch all the forms we want to apply custom Bootstrap validation styles to
		    var forms = document.getElementsByClassName('needs-validation');
		    // Loop over them and prevent submission
		    var validation = Array.prototype.filter.call(forms, function(form) {
		    	form.addEventListener('submit', function(event) {
		    		if (form.checkValidity() === false) {
		    			event.preventDefault();
		    			event.stopPropagation();
		    		}
		    		form.classList.add('was-validated');
		    	}, false);
		    });
		}, false);
		})();
	</script>
</body>
</html>