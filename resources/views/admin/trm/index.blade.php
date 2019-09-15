@extends('admin.layout')

@section('content')

	@include('admin.templates.alert')
	<form action="/control/trm/editar" method="POST" autocomplete="off">
		@csrf
		@method('PUT')
		{{-- @method('PUT') --}}
		<div class="row">
			@foreach ($data as $value)
				<div class="col-md-4">
					<!-- Widget: user widget style 1 -->
					<div class="box box-widget widget-user-2">
						<!-- Add the bg color to the header using any of the bg-* classes -->
						<div class="widget-user-header bg-default">
							<div class="widget-user-image">
								<img class="img" src="{{asset($value->flag)}}" alt="Bandera-{{$value->name}}">
							</div>
							<div class="widget-user-username">
								<h3>{{$value->name}}</h3>
							</div>
							<!-- /.widget-user-image -->
						</div>
						<div class="box-footer">
							<br>
							<div class="input-group input-group-lg">

								<input class="form-control" type="number" step="any" name="pais[new][{{$value->id}}]" value="{{$value->value}}" placeholder="Trm" title="Trm" required>

								<input type="hidden" name="pais[old][{{$value->id}}]" value="{{$value->value}}">

								<div class="input-group-btn">
									<span class="btn btn-default">TRM/{{$value->coin}}</span>
								</div>
							</div>
							<div class="input-group pull-right">
								<p class="description-text">Editado por:
									{!! Auth::user()->rol == 'ADMIN'? '<a href="/control/usuarios">' : ''!!}
										<span class="description-text"> {{$value->user}}</span>
									{!! Auth::user()->rol == 'ADMIN'? '</a>' : ''!!}
								</p>
							</div>
							<br>
							<br>
							<input class="btn btn-primary btn-flat btn-block btn-lg" type="submit" name="" value="Editar" >
						</div>
					</div>
					<!-- /.widget-user -->
				</div>
			@endforeach
		</form>
	</div>
@endsection
