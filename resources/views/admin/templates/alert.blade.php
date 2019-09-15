@if (Session::has('info'))
	<div class="callout callout-info alert">
		<button type="button" class="close" data-dismiss="alert">
			&times;
		</button>
		<h4><i class="icon fa fa-info"></i> Ten en cuenta!</h4>
		<p>{{Session::get('info')}}</p>
	</div>
@endif

@if (Session::has('success'))
	<div class="callout callout-success alert">
		<button type="button" class="close" data-dismiss="alert">
			&times;
		</button>
		<h4><i class="icon fa fa-check"></i> Felicidades!</h4>
		<p>{{Session::get('success')}}</p>
	</div>
@endif

@if (count($errors))
	<div class="callout callout-danger alert">
		<button type="button" class="close" data-dismiss="alert">
			&times;
		</button>
		<h4><i class="icon fa fa-ban"></i> Error!</h4>
		<p>
			@foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
			</p>
	</div>
@endif

@if (Session::has('alert'))
	<div class="callout callout-warning alert">
		<button type="button" class="close" data-dismiss="alert">
			&times;
		</button>
		<h4><i class="icon fa fa-warning"></i> Advertencia!</h4>
		<p>{{Session::get('alert')}}
		@if (Session::has('password_request') && $title != 'Editar Password')
			<a class="btn btn-warning btn-lg btn_alert" href="/control/perfil/password">¡Cambiar YA!</a>
		@endif
	</div>
@endif
