<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/client.styles.css"/>
	<link rel="shortcut icon" href="">
	<title>Piven | Inicio</title>
</head>
<body>
	<header> <!-- Cabezera -->
		<section class="info">

			<div class="infoRate">

			</div>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, excepturi. Accusamus ad modi, cum doloribus iste corrupti sequi illum quis reprehenderit quos consectetur saepe. Tempora praesentium magni architecto tempore exercitationem.</p>
		</section>
		<section class="form"><!-- Tasa -->

			<div class="rate"><h3 id="rate">La tasa de cambio para Peru es de 0</h3></div>
			<div class="container">

				<div id='send_form' class="inputs">
					<label for="from" id="textFrom" >Tu envías desde Peru</label>
					<input type="text" name="from" id="from" readonly autofocus />


					<div class="dropdown">
						<button class="select dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="fromCountry" >
							<span id="fromCountrySpan">PEN</span>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="fromCountry">
						</div>
					</div>

					<div id="flag" class="flag flagPeru"></div>
				</div>

				<div class="inputs">
					<label for="to" >Tu destinatario recibe en Venezuela</label>
					<input type="text" name="to" id="to" readonly value="0,00"/>
					<div class="select"><p>BsS</p></div>
					<div class="flagVenezuela flag"></div>
				</div>

			</div>
		</section>
	</header>

	{{-- Jquery --}}
	<script src="{{asset('/plugins/jquery/dist/jquery.min.js')}}"></script>
	{{-- Bootstrap 3.3.7 --}}
	<script src="{{asset('/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>


	<script src="plugins/jquery.3.4.1.min.js">
	</script>
	<script src="plugins/popper.min.js">
	</script>
	<script src="plugins/bootstrap.min.js" charset="utf-8">
	</script>
	<script src="js/formatNumber.js">
	</script>
	<script src="js/formatString.js">
	</script>
	<script src="js/countries.js">
	</script>
	<script src="js/ipCountry.js">
	</script>
	<script src="js/localStorage.js">
	</script>
	<script src="js/main.js">
	</script>

</body>
</html>
