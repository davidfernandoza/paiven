@extends('admin.layout')

@section('content')

	<div class="row">
		<div class="col-xs-12">
			<div class="box box-header">
				<br>
				<div class="box-body">
					<form action="/control/usuarios/crear" method="POST" autocomplete="off">
						@csrf
						{{-- Nombre --}}
						<div class="form-group @error ('name')	@enderror" >
							<label class="control-label" for="inputError"></i>Nombre:</label>
							<input type="text" class="form-control" name="name" placeholder="Juan David Gomez Duque" value="{{old('name')}}" required max="45" min="3" title="Nombre">
							@error('name')<span class="help-block" role="alert"> {{ $message }}	</span>	@enderror
						</div>

						{{-- Email  --}}
						<div class="form-group @error ('email') has-error	@enderror" >
							<label class="control-label" for="inputError"></i>Email:</label>
							<input type="email" class="form-control" name="email" placeholder="juan-david@ejemplo.com" title="Email" value="{{old('email')}}" required min="8" max="150">
							@error('email')<span class="help-block" role="alert"> {{ $message }}	</span>	@enderror
						</div>

						{{-- Phone  --}}
						<div class="form-group @error ('phone') has-error	@enderror" >
							<label class="control-label" for="inputError"></i>Telefono:</label>
							<input type="number" class="form-control" name="phone" placeholder="32345678" title="Telefono" value="{{old('phone')}}" required min="10000" max="999999999999">
							@error('phone')<span class="help-block" role="alert"> {{ $message }}	</span>	@enderror
						</div>

						{{-- Rol --}}
						<div class="form-group @error ('rol') has-error	@enderror" >
							<label>Rol:</label>
							<select name="rol" class="form-control " style="width: 100%;" required>
								<option {{!isset($errors) ? '' : 'selected'}} value="0" disabled>SELECCIONAR</option>
								<option {{old('rol') == 'ADMIN' ? 'selected' : ''}} value="ADMIN">ADMIN</option>
								<option {{old('rol') == 'BASIC' ? 'selected' : ''}} value="BASIC">BASIC</option>
							</select>
						</div>

						{{-- visible --}}
						<div class="form-group @error ('visible') has-error	@enderror" >
							<label>Visible:</label>
							<select name="visible" class="form-control " style="width: 100%;" required>
								<option {{!isset($errors) ? '' : 'selected'}} value="0" disabled>SELECCIONAR</option>
								<option {{old('visible') == 'TRUE' ? 'selected' : ''}} value="TRUE">SI</option>
								<option {{old('visible') == 'FALSE' ? 'selected' : ''}} value="FALSE">NO</option>
							</select>
						</div>

						{{-- Botones  --}}
						<div class="form-group">
							<div class="row">
								<div class="col-xs-6">
									<a href="/control/usuarios" class="btn btn-block btn-default btn-lg">Cancelar</a>
								</div>
								<div class="col-xs-6">
									<button type="submit"  class="btn btn-block btn-primary btn-lg">Crear</button>
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
