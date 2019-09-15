@extends('admin.layout')

@section('content')

	@include('admin.templates.alert')

	<div class="row">
		<div class="col-xs-12">
			<div class="box box-header">
				<br>
				<div class="box-body">
					<form action="/control/usuarios/crear" method="POST" autocomplete="off">
						@csrf
						{{-- Nombre --}}
						<div class="form-group">
							<label class="control-label" for="inputError"></i>Nombre:</label>
							<input type="text" class="form-control" name="name" placeholder="Juan David Gomez Duque" value="{{isset($errors) ?'':'auth'}}" required max="45" min="3" title="Nombre">
						</div>

						{{-- Email  --}}
						<div class="form-group">
							<label class="control-label" for="inputError"></i>Email:</label>
							<input type="email" class="form-control @error('name') 	@enderror" name="email" placeholder="juan-david@ejemplo.com" title="Email" value="{{isset($errors) ?'' :''}}" required min="8" max="150">
						</div>

						{{-- Phone  --}}
						<div class="form-group">
							<label class="control-label" for="inputError"></i>Telefono (password):</label>
							<input type="number" class="form-control" name="phone" placeholder="32345678" title="Telefono" value="{{isset($errors) ?'' :''}}" required min="10000" max="999999999999">
						</div>



						{{-- Botones  --}}
						<div class="form-group box-body">
							<div class="row">
								<div class="col-xs-6">
									<a href="/control/usuarios" class="btn btn-block btn-default btn-lg">Cancelar</a>
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
