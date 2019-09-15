@extends('auth.templates.layout')

@section('content')

	<form method="POST" action="/control/recuperar">
		@csrf
		<input type="hidden" name="token" value="{{ $token }}">

		<div class="form-group @error('email') has-error  @enderror">
			<label for="email" class="col-md-12 col-form-label text-md-right">Email:</label>

			<input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ $email ?? old('email') }}" required autofocus name="email" spellcheck="false" title="Email">


				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				@error('email')<span class="help-block" role="alert"> {{ $message }}	</span>	@enderror
			</div>

			<div class="form-group @error('password') has-error  @enderror">
				<label for="password" class="col-md-12 col-form-label text-md-right">Password:</label>

				<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" title="Password" placeholder="Password" min="8" max="64">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>

					@error('password')<span class="help-block" role="alert">{{ $message }}</span>	@enderror
				</div>


				<div class="form-group @error('password') has-error  @enderror">
					<label for="password-confirm" class="col-md-12 col-form-label text-md-right">Confirmar Password</label>

					<input  id="password-confirm" type="password" class="form-control" placeholder="Confirmar Password" title="Confirmar Password" name="password_confirmation" required min="8" max="64">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					@error('password')<span class="help-block" role="alert">{{ $message }}</span>	@enderror

				</div>
				<br>
				<div class="row">

					<div class="col-xs-12">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Retomar</button>
					</div>

				</div>
			</form>
		@endsection
