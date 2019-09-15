@extends('admin.layout')

@section('content')

	@include('admin.templates.alert')

	<div class="row">

		<div class="col-md-4">


			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="">Crear Pais</h3>
				</div>
				<div class="box-footer">
					<!-- /.box-header -->
					<!-- form start -->
					<form class="form-horizontal" action="/control/paises/crear" method="POST" autocomplete="off">
						@csrf
						<div class="box-body">
							<br>
							<div class="form-group @error ('name') has-error @enderror">
								<label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" max="45" min="3" placeholder="Colombia" name="name" title="Nombre" required value="{{old('name')}}">
									@error('name')	<span class="help-block" role="alert">{{ $message }}</span>	@enderror

								</div>
							</div>
							<br>
							<div class="form-group @error ('coin') has-error @enderror">
								<label for="inputPassword3" class="col-sm-2 control-label">Moneda</label>

								<div class="col-sm-10">
									<input type="text" class="form-control" max="4" min="3" placeholder="COP" name="coin" title="Moneda" required value="{{old('coin')}}">
									@error('coin')	<span class="help-block" role="alert">{{ $message }}</span>	@enderror
								</div>
							</div>
							<br>
							<div class="form-group @error ('value') has-error @enderror">
								<label for="inputPassword3" class="col-sm-2 control-label">TRM</label>

								<div class="col-sm-10">
									<input type="number" name="value" step="any" class="form-control"  placeholder="1.5" required title="TRM" value="{{old('value')}}">
									@error('value')	<span class="help-block" role="alert">{{ $message }}</span>	@enderror
								</div>
							</div>
						</div>

						<!-- /.box-body -->
						<div class="box-body">
							<input type="hidden" name="user" value="1">
							<button type="submit" class="btn btn-info btn-block btn-lg">Crear</button>
						</div>
						<!-- /.box-footer -->
					</form>
				</div>
			</div>
		</div>

		@foreach ($data as $value)

			<!-- Widget: user widget style 1 -->
			<div class="col-md-4">
				<div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-aqua-active">
						<h3 class="widget-user-username">{{$value->name}}</h3>
						<h5 class="widget-user-desc">{{$value->coin}}</h5>
					</div>
					<div class="widget-user-image">
						<img src="{{asset($value->flag)}}" alt="Bandera-{{$value->name}}" height="62">
					</div>
					<br>
					<div class="row">
						<!-- /.col -->
						<div class="col-sm-6 border-right">
							<div class="description-block">
								<h5 class="description-header">{{$value->monthQuery}}</h5>
								<span class="description-text">Consultas Mensuales</span>
							</div>
							<!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-6">
							<div class="description-block">
								<h5 class="description-header">{{$value->totalQuery}}</h5>
								<span class="description-text">Consultas Totales</span>
							</div>
							<!-- /.description-block -->
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
					<div class="box-footer">
						<form class="form-horizontal" action="/control/paises/editar" method="post">
							@csrf
							@method('PUT')
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-2 control-label">Nombre</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" max="45" min="3" value="{{$value->name}}" title="Nombre" {{$value->status == 0 ?'disabled':'required'}} name='name'>
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-2 control-label">Moneda</label>

								<div class="col-sm-10">
									<input type="text" class="form-control" max="4" min="3" value="{{$value->coin}}" title="Moneda" {{$value->status == 0 ?'disabled':'required'}} name="coin">
								</div>
							</div>

							<div class="box-body">
								<input type="hidden" name="id" value="{{$value->id}}">
								<div class="row">
									@if ($value->status == 1)
										<div class="col-xs-6" style="float: right">
											<button type="submit" class="btn btn-info btn-block btn-lg">Editar</button>
										</div>
									@endif
								</form>
								<form action="/control/paises/{{$value->status == 1 ?'eliminar':'activar'}}" method="POST">
									@csrf
									@method('DELETE')
									<input type="hidden" name="id" value="{{$value->id}}">
									@if ($value->status == 1)
										<div class="col-xs-6">
											<input type="submit" value="Eliminar" class="btn btn-default btn-block btn-lg">
										</div>
									@else
										<div class="col-xs-12">
											<input type="submit" value="Activar" class="btn btn-info btn-block btn-lg">
										</div>
									@endif
								</form>
							</div>
						</div>


					</div>
				</div>

				<!-- /.widget-user -->
			</div>

	@endforeach
</div>
@endsection
