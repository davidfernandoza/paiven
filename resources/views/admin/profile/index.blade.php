@extends('admin.layout')

@section('content')

	@include('admin.templates.alert')

	<div class="row">
		<div class="col-xs-12">
			<div class="box box-header">
				<br>
				<div class="box-body">
					<form action="/control/perfil" method="POST" autocomplete="off" enctype="multipart/form-data">
						<div class="row">

							{{-- Avatar --}}
							<div class="col-xs-12 col-md-4">
								<label class="control-label" for="inputError"></i>Avatar:</label><small> fotos cuadradas (Ej: 10 x 10)</small>
								<div class="thumbnail" >
									<div class="contenidos">
										<div class="img_contenedor">
											<img class="img-circle" src="{{asset(Auth::user()->avatar)}}" alt="avatar" width='150' id="img_avatar" >
										</div>
									</div>
									<input type="file" name="avatar" id="input_avatar">
								</div>
								@error('avatar')<span class="help-block" role="alert">{{ $message }}</span>	@enderror
							</div>
							<div class="col-xs-12 col-md-8">
								@csrf
								@method('PUT')
								<input type="hidden" name="id" value="{{Auth::user()->id}}">

								{{-- Nombre --}}
								<div class="form-group @error('name') has-error	@enderror">
									<label class="control-label" for="inputError"></i>Nombre:</label>
									<input type="text" class="form-control" name="name" value="{{count($errors) == 0 ? Auth::user()->name : old('name') }}" required max="45" min="3" title="Nombre">
									@error('name')<span class="help-block" role="alert">{{ $message }}</span>	@enderror
								</div>

								{{-- Email  --}}
								<div class="form-group @error('email') has-error	@enderror">
									<label class="control-label" for="inputError"></i>Email:</label>
									<input type="email" class="form-control" name="email" title="Email" value="{{count($errors) == 0 ? Auth::user()->email : old('email') }}" required min="8" max="150">
									@error('email')<span class="help-block" role="alert">{{ $message }}</span>	@enderror
								</div>

								{{-- Phone  --}}
								<div class="form-group @error('phone') has-error	@enderror">
									<label class="control-label" for="inputError"></i>Telefono:</label>
									<input type="number" class="form-control" name="phone" title="Telefono" value="{{count($errors) == 0 ? Auth::user()->phone : old('phone') }}" required min="10000" max="999999999999">
									@error('phone')<span class="help-block" role="alert">{{ $message }}</span>	@enderror
								</div>

							</div>
							{{-- Botones  --}}
							<div class="col-xs-12">
								<div class="form-group box-body">
									<div class="row">
										<div class="col-xs-6">
											<a href="/control/trm" class="btn btn-block btn-default btn-lg">Cancelar</a>
										</div>
										<div class="col-xs-6">
											<button type="submit"  class="btn btn-block btn-primary btn-lg">Editar</button>
										</div>
									</div>
									<br>
									<div class="row box-footer">
										<br>
										<div class="col-xs-12">
											<a href="/control/perfil/password" class="btn btn-block btn-default btn-lg">Editar Password</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
