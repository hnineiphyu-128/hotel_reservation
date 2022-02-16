<!DOCTYPE html>
<html>
<head>
	<title>Hotel UE</title>
	<meta charset="utf-8">
	<!-- call external css -->
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/style.css')}}">

	<!-- call bootstrap css -->
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">

	<!-- call jq -->
	<script type="text/javascript" src="{{asset('frontend/jquery/jquery.min.js')}}"></script>

	<!-- call js -->
	<script type="text/javascript" src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
	<style type="text/css">
		.navbar-nav .nav-item{
			margin:10px;
		}
		.navbar-nav .nav-item a{
			font-size: 20px;
		}
		label{
			color: #fff;
		}
		a{
			color:#fff;
			text-decoration: none;
		}
		.form-submit {
			display: inline-block;
		  	background: #900603;
		  	color: #fff;
		  	border-bottom: none;
		  	width: auto;
		  	padding: 15px 39px;
		  	border-radius: 5px;
		  	-moz-border-radius: 5px;
		  	-webkit-border-radius: 5px;
		  	-o-border-radius: 5px;
		  	-ms-border-radius: 5px;
		  	margin-top: 25px;
		  	cursor: pointer; }
		  	.form-submit:hover {
		    background: #A91B0D;
		  	color: #fff; 
		}
		.txt-color{
			color: #900603;
		}

	</style>
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-expand-lg navbar-light bg-light menu fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#">Hotel UE</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link active px-3" href="/">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle px-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Events
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<div class="dropdown-divider"></div>
					          	<a class="dropdown-item" href="#">Birthday Party</a>
					          	<a class="dropdown-item" href="#">Wedding Party</a>
					          	<a class="dropdown-item" href="#">Meeting Rooms</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link px-3" href="{{ route('booking')}}">Reservation</a>
						</li>
						<li class="nav-item">
							<a class="nav-link px-3" href="#">Location</a>
						</li>
						@guest
                        <li class="nav-item">
                            <a class="nav-link px-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item px-3">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link px-3 dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            	
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
					</ul>
				</div>
			</div>
		</nav>
		<!-- End Navogation -->

		<div id="mycarousel" class="carousel-slide pt-5" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="{{asset('frontend/hotelimg/hotel1.jpg')}}" class="w-100" style="height: 400px">
				</div>
				<div class="carousel-item h-50">
					<img src="{{asset('frontend/hotelimg/13.jpg')}}" class="w-100" style="height: 400px">
				</div>
				<div class="carousel-item h-50">
					<img src="{{asset('frontend/hotelimg/restaurant2.jpeg')}}" class="w-100" style="height: 400px">
				</div>
				<div class="carousel-item h-50">
					<img src="{{asset('frontend/hotelimg/pool.jpg')}}" class="w-100" style="height: 400px">
				</div>
			</div>
		</div>		
	</div>

	{{$slot }}

	<div class="container-fluid bg-secondary mt-4">
		<div class="container mt-2">
			<div class="row">
				<div class="col-sm-6 mt-4">
					<h1 class="txt-color" style="font-family: serif;">About Us</h1>
					<a href="">Community</a><br>
					<a href="">About Us</a><br>
					<a href="">Our Culture and Commitment</a><br>
					<a href="">Development Opportunities</a><br>
					<a href="">Newsroom</a><br>
					<a href="">Awards and Accolades</a><br>
				</div>
				<div class="col-sm-6 mt-4">
					<h1 class="txt-color">Contact Us</h1>
					<label>Telephone:010-123443215</label><br>
					<label>To-free:1083 659 522</label><br>
					<label>Email:hotelUE@gmail.com</label>
			</div>
			</div>
		</div>
	</div>
</body>
</html>