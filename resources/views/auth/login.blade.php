@extends('templates.loginLayout')

@section('content')

		<form method="POST" action="/control/login">
			@csrf

			<div class="form-group @error('email') has-error  @enderror">
				<input type="email" id="email" class="form-control " placeholder="Email" value="{{ old('email') }}" required autofocus name="email" spellcheck="false">
				@error('email')	<span class="help-block" role="alert">{{ $message }}</span>@enderror
			</div>


			<div class="form-group @error('email') has-error  @enderror">
				<input  id="password" type="password" class="form-control @error('email') has-warning @enderror" placeholder="Password" name="password" required value="{{old('password')}}" min="8" max="64">
				@error('email')<span class="help-block" role="alert">{{ $message }}</span>@enderror
			</div>
			<br>

			<div class="row">
				<div class="col-xs-6">
					<div class="checkbox icheck">
						<label>
						<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> ¡Recuérdame!
						</label>
					</div>
				</div>
				<!-- /.col -->
				<div class="col-xs-6">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button>
				</div>
				<!-- /.col -->
			</div>
		</form>
		<br>
		<center>
			<a href="/control/recuperar">¡Olvidé mi contraseña!</a>
		</center>
		@endsection
