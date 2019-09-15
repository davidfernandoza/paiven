@extends('auth.templates.layout')

@section('content')

	<form method="POST" action="/control/email">
		@csrf

		<div class="form-group @error('email') has-error  @enderror">
			<input type="email" id="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required autofocus name="email" spellcheck="false">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				@error('email')	<span class="help-block" role="alert">{{ $message }}</span>	@enderror
			</div>
			<div class="row">

				<div class="col-xs-6">
					<a href="/control" class="btn btn-default btn-block btn-flat">Cancelar</a>
				</div>

				<div class="col-xs-6">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Enviar Password</button>
				</div>
			</div>
		</form>
	@endsection
