<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Paiven</title>

	<!-- Bootstrap core CSS -->
	<link href="{{asset('plugins/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap" rel="stylesheet">

	<link href="{{asset('plugins/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

	<!-- Custom styles for this template -->
	<link href="{{asset('css/coming-soon.css')}}" rel="stylesheet">
	<link rel="shortcut icon" href="{{asset('images/paiven_logo.png')}}">
</head>

<body>

	<div class="overlay"></div>
	<video width="13" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
		<source src="{{asset('mp4/bg.mp4')}}" type="video/mp4">
		</video>

		<div class="masthead">
			<div class="masthead-bg"></div>
			<div class="container h-100">
				<div class="row h-100">
					<div class="col-12 my-auto">
						<div class="masthead-content text-white py-5 py-md-0">
							<h1 class="mb-3"><img src="{{asset('images/paiven_logo.png')}}" alt="logo" width="150">Paiven</h1>
							<p class="mb-5">Consulta el valor de cambio más barato de internet para el envió de divisas a <strong>Venezuela.</strong>
							</p>
							<div id="rate">
								<p id="rateDefault">
									Tasa de cambio para <samp>Peru</samp> es de <strong>0.1</strong>
								</p>
							</div>

							<label id="textFrom">Tu envías desde Peru</label>
							<div class="input-group input-group-newsletter">

								{{-- Input --}}
								<input 	type="text"
												id="from"
												step="any"
												class="form-control"
												title="Cantidad que envias"
												placeholder="Cantidad..."
												aria-label="Cantidad..."
												aria-describedby="basic-addon"
												readonly>

								<div class="input-group-append dropdown btd">

									{{-- Button --}}
									<button class="select dropdown-toggle btn btn-secondary"
													type="button"
													id="dropdownMenuButton"
													data-toggle="dropdown"
													aria-haspopup="true"
													aria-expanded="false"
													name="fromCountry" >
										<span id="fromCountrySpan">
											PEN
											<img 	src="{{asset('images/flags/Peru.svg')}}"
														alt="bandera"
														width="40"
														id="flag"
														class="flagS">
										</span>
									</button>

									{{-- Menu --}}
									<div 	class="dropdown-menu"
												aria-labelledby="dropdownMenuButton"
												id="fromCountry">
									</div>

								</div>
							</div>

							<br>

							<label>El destinatario recibe en Venezuela</label>
							<div class="input-group input-group-newsletter">
								<input 	type="text"
												class="form-control bns"
												title="Cantidad que recibe el destinatario"
												aria-label="Cantidad..."
												aria-describedby="basic-addon"
												value="0,00"
												readonly
												id="to">
								<div class="input-group-append btd">
									<button class="btn btn-secondary btnVen bns">
										<span>BsS</span>
										<img 	src="{{asset('images/flags/Venezuela.svg')}}"
													alt="bandera"
													width="40"
													id="flag"
													class="flagS flagVen">
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="social-icons">
			<ul class="list-unstyled text-center mb-0" id="users">

			</ul>
		</div>


		{{-- Jquery --}}
		<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
		{{-- Bootstrap 3.3.7 --}}
		<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		{{-- Template --}}
		<script src="{{asset('/js/coming-soon.js')}}"></script>
		{{-- Parse number --}}
		<script src="{{asset('/js/formatNumber.js')}}"></script>
		{{-- Parse string --}}
		<script src="{{asset('/js/formatString.js')}}"></script>
		{{-- Query countries --}}
		<script src="{{asset('/js/countries.js')}}"></script>
		{{-- Get ip --}}
		<script src="{{asset('/js/ipCountry.js')}}"></script>
		{{-- Save localStorage --}}
		<script src="{{asset('js/localStorage.js')}}"></script>
		{{-- Users --}}
		<script src="{{asset('js/users.js')}}"></script>
		{{-- Main --}}
		<script src="{{asset('js/main.js')}}"></script>


	</body>

	</html>
