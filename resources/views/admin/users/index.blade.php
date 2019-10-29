@extends('admin.layout')

@section('content')

	<div class="row galeria">

		@foreach($data as $value)

			<div class="col-md-6 card">
				<div class="box box-widget widget-user-2 box collapsed-box">

					<div class="widget-user-header bg-default box-header with-border">

						<div class="widget-user-image" >

								<div class="img_contenedor_sm">
									<img class="img-circle" src="{{asset($value->avatar)}}" alt="Avatar-{{$value->name}}" >
								</div>
							</div>


						<div class="box-tools pull-right">
							<button type="button" class="btn btn-sm btn-{{$value->status == 0 ? 'default' : 'primary'}}" data-widget="collapse"><i class="fa fa-plus"></i>
							</button>
						</div>

						<!-- /.widget-user-image -->
						<h3 class="widget-user-username">{{$value->name}}
							<img src="{{asset($value->flag)}}" alt="pais" width="25">
						</h3>
						<h5 class="widget-user-desc">{{$value->rol}}</h5>
					</div>

					<!-- /.box-header -->
					<div class="box-body" style="display: none;">
						<form class="form-group" action="/control/usuarios/editar" method="POST">
							@csrf
							@method('PUT')
							<div class="box-body">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Nombre:</label>
									<div class="col-sm-12">
										<input type="text" class="form-control" max="45" min="3" placeholder="Dario" name="name" title="Nombre" {{$value->status == 0 ?'disabled':'required'}} value="{{$value->name}}">
									</div>
								</div>

								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Email:</label>
									<div class="col-sm-12">
										<input type="text" class="form-control" max="150" min="8" placeholder="dario@ejemplo.com" name="email" title="Email" {{$value->status == 0 ?'disabled':'required'}} value="{{$value->email}}">
									</div>
								</div>

								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Telefono:</label>
									<div class="col-sm-12">
										<div class="input-group">
											<span class="input-group-addon" id="basic-addon1">+{{$value->codePrefix}}</span>
											<input type="number" class="form-control" max="999999999999" min="100000" placeholder="3101110000" name="phone" title="Telefono" {{$value->status == 0 ?'disabled':'required'}} value="{{$value->phone}}" aria-describedby="basic-addon1">
											<a  class="input-group-addon" id="basic-addon1" href="https://wa.me/573147754648" target="_blank">
													<i class="fa fa-whatsapp"></i>
											</a>
										</div>


									</div>
								</div>

								{{-- rol --}}
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Rol:</label>
									<div class="col-sm-12">
										<select class="form-control" name="rol" title="Rol" {{$value->status == 0 ?'disabled':'required'}}>
											<option value="ADMIN" {{$value->rol == 'ADMIN' ? 'selected' : ''}}>ADMIN</option>
											<option value="BASIC" {{$value->rol == 'BASIC' ? 'selected' : ''}}>BASIC</option>
										</select>
									</div>
								</div>

								{{-- countries --}}
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Residencia:</label>
									<div class="col-sm-12">
										<select class="form-control" name="country" title="Residencia" {{$value->status == 0 ?'disabled':'required'}}>
											@foreach ($country as $valueCountry)
												<option value="{{$valueCountry->id}}"
													{{$valueCountry->id == $value->country_id ? 'selected' : ''}}>{{$valueCountry->name}}</option>
											@endforeach
										</select>
									</div>
								</div>

								{{-- visible --}}
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-3 control-label">Visible:</label>
									<div class="col-sm-12">
										<select class="form-control" name="visible" title="Visible" {{$value->status == 0 ?'disabled':'required'}}>
											<option value="1" {{$value->visible == 1 ? 'selected' : ''}}>SI</option>
											<option value="0" {{$value->visible == 0 ? 'selected' : ''}}>NO</option>
										</select>
									</div>
								</div>


							</div>
							<br>
							<div class="box-footer">
								<div class="row">
									<input type="hidden" name="id" value="{{$value->id}}">
									@if ($value->status == 1)
										<div class="col-xs-6" style="float: right">
											<button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button>
										</div>
									@endif
								</form>
								<form action="/control/usuarios/{{$value->status == 1 ?'eliminar':'activar'}}" method="POST">
									@csrf
									@method('DELETE')
									<input type="hidden" name="id" value="{{$value->id}}">
									@if ($value->status == 1)
										<div class="col-xs-6 pull-left">
											<input type="submit" value="Eliminar" class="btn btn-default  btn-lg btn-block">
										</div>
									@else
										<div class="col-xs-12">
											<input type="submit" value="Activar" class="btn btn-primary btn-block btn-lg">
										</div>
									@endif
								</form>
							</div>
						</div>
					</div>
					<!-- /.box -->
				</div>
			</div>
		@endforeach
	</div>
@endsection
