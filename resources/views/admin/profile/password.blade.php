@extends('admin.layout')

@section('content')

	@include('admin.templates.alert')

	<div class="row">
		<div class="col-xs-12">
			<div class="box box-header">
				<br>
				<div class="box-body">
					<form action="/control/perfil/password" method="POST" autocomplete="off">
						@csrf
						@method('PUT')

						@if (!Session::has('password_request'))
							<div class="form-group @error('current-password') has-error  @enderror">
								<label for="password" class="col-md-12 col-form-label text-md-right">Password Actual:</label>

								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="current-password" required  title="Password Actual" placeholder="Password Actual" min="8" max="64">
									@error('current-password')<span class="help-block" role="alert">{{ $message }}</span>	@enderror
							</div>
						@else
							<input type="hidden" name="current-password" value="{{Session::get('password_request')}}">
						@endif

						<div class="form-group @error('password') has-error  @enderror">
							<label for="password" class="col-md-12 col-form-label text-md-right">Password Nuevo:</label>

							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required  title="Password Nuevo" placeholder="Password Nuevo" min="8" max="64">
								@error('password')<span class="help-block" role="alert">{{ $message }}</span>	@enderror
								</div>


								<div class="form-group @error('password') has-error  @enderror">
									<label for="password-confirmation" class="col-md-12 col-form-label text-md-right">Confirmar Password</label>

									<input  id="password-confirmation" type="password" class="form-control" placeholder="Confirmar Password" title="Confirmar Password" name="password_confirmation" required min="8" max="64">
									@error('password')<span class="help-block" role="alert">{{ $message }}</span>	@enderror

									</div>


									{{-- Botones  --}}
									<div class="form-group box-body">
										<div class="row">
											<div class="col-xs-6">
												<a href="/control/trm" class="btn btn-block btn-default btn-lg">Cancelar</a>
											</div>
											<div class="col-xs-6">
												<button type="submit"  class="btn btn-block btn-primary btn-lg">Editar</button>
											</div>
										</div>

									</tr>
								</table>
							</div>

						</form>
					</div>
				</div>
			</div>
		@endsection
