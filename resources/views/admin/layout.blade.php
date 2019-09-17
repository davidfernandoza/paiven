<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	{{-- Bootstrap --}}
	<link rel="stylesheet" href="{{asset('/admin/plugins/bootstrap/dist/css/bootstrap.min.css')}}">

	{{-- Font Awesome --}}
	<link rel="stylesheet" href="{{asset('/admin/plugins/font-awesome/css/font-awesome.min.css')}}">

	{{-- Ionicons --}}
	<link rel="stylesheet" href="{{asset('/admin/plugins/Ionicons/css/ionicons.min.css')}}">

	{{-- Theme style --}}
	<link rel="stylesheet" href="{{asset('/admin/css/AdminLTE.min.css')}}">

	{{-- Skins --}}
	<link rel="stylesheet" href="{{asset('/admin/css/skins/skin-black.min.css')}}">

	{{-- Owns --}}
	<link rel="stylesheet" href="{{asset('/admin/css/own.css')}}">

	{{-- Google Font --}}
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

	<title>Paiven Control | {{$title}}</title>

</head>
<body class="hold-transition skin-black sidebar-mini">
	<div class="wrapper">

		{{-- Header --}}
		<header class="main-header">

			{{-- Logo --}}
			<a href="/control/trm" class="logo">
				{{-- mini logo for sidebar mini 50x50 pixels --}}
				<span class="logo-mini"><b>PVN</b></span>
				{{-- logo for regular state and mobile devices --}}
				<span class="logo-lg"><b>Paiven</b>.com</span>
			</a>

			{{-- Header Navbar --}}
			<nav class="navbar navbar-static-top" role="navigation">
				{{-- Sidebar toggle button--}}
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"></a>

				{{-- Navbar Right Menu --}}
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						{{-- User Account Menu --}}
						<li class="dropdown user user-menu">
							{{-- Menu Toggle Button --}}
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								{{-- The user image in the navbar--}}


								<img src="{{asset(Auth::user()->avatar)}}" class="user-image" alt="User Image">

								<span class="hidden-xs">{{Auth::user()->name}}</span>

							</a>
							<ul class="dropdown-menu">
								{{-- The user image in the menu --}}
								<li class="user-header">

									<img src="{{asset(Auth::user()->avatar)}}" class="img-circle" alt="User Image">

									<p>
										{{Auth::user()->name}}
										<small>{{Auth::user()->rol}}</small>
									</p>
								</li>
								{{-- Menu Footer--}}
								<li class="user-footer">
									<div class="row">
										<div class="col-xs-6">
											<a href="/control/perfil" class="btn btn-default btn-block btn-flat">Perfil</a>
										</div>
										<div class="col-xs-6">
											<form id="logout-form" action="/control/logout" method="POST">
												@csrf
												<input type="submit" value="Cerrar Sesión" class="btn btn-primary btn-block btn-flat">
											</form>
										</div>
									</div>
								</li>
							</ul>
						</li>
						{{-- Control Sidebar Toggle Button --}}
					</ul>
				</div>
			</nav>
		</header>



		{{-- Left side column. contains the logo and sidebar --}}
		<aside class="main-sidebar sticky">

			{{-- sidebar: style can be found in sidebar.less --}}
			<section class="sidebar position-fixed fixed-top">


				{{-- Sidebar Menu --}}
				<ul class="sidebar-menu" data-widget="tree">
					<li class="{{$title == 'TRM' ? 'active' :''}}">
						<a href="/control/trm"><i class="fa fa-exchange"></i> <span>TRM</span></a>
					</li>

					@if ( Auth::user()->rol == 'ADMIN')

					<li class="{{$title == 'Paises' ? 'active' :''}}">
						<a href="/control/paises"><i class="fa fa-flag-o"></i> <span>Paises</span></a>
					</li>

					<li class="{{$title == 'Usuarios' || $title == 'Crear Usuarios' ? 'active' :''}} treeview menu-close" style="height: auto;">
						<a href="#">
							<i class="fa fa-users"></i> <span>Usuarios</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu" style="">
							<li class="{{$title == 'Usuarios' ? 'active' :''}}">
								<a href="/control/usuarios"><i class="fa fa-list"></i>Listar</a>
							</li>
							<li class="{{$title == 'Crear Usuarios' ? 'active' :''}}">
								<a href="/control/usuarios/crear"><i class="fa fa-plus"></i>Crear</a>
							</li>
						</ul>
					</li>
				@endif

				</ul>
				{{-- /.sidebar-menu --}}
			</section>
			{{-- /.sidebar --}}
		</aside>

		{{-- Content Wrapper. Contains page content --}}
		<div class="content-wrapper contenido">
			{{-- Content Header (Page header) --}}
			<section class="content-header">
				<h2>
					{{$title}}
				</h2>
			</section>

			{{-- Main content --}}
			<section class="content container-fluid">

				@yield('content')

			</section>
			{{-- /.content --}}
		</div>
		{{-- /.content-wrapper --}}

		{{-- Main Footer --}}
		<footer class="main-footer">
			{{-- To the right --}}
			<div class="pull-right hidden-xs">
				Dev. David Fernando Torres Z.
			</div>
			{{-- Default to the left --}}
			<strong>Copyright &copy; 2019 <a href="https://www.visionware.com.co" target="_blanck" >VISIONWARE.SAS</a>.</strong> Todos los derechos reservados.
		</footer>
	</div>
	{{-- ./wrapper --}}

	{{-- REQUIRED JS SCRIPTS --}}

	{{-- jQuery 3 --}}
	<script src="{{asset('/admin/plugins/jquery/dist/jquery.min.js')}}"></script>
	{{-- Bootstrap 3.3.7 --}}
	<script src="{{asset('/admin/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	{{-- AdminLTE App --}}
	<script src="{{asset('/admin/js/adminlte.min.js')}}"></script>
	{{-- Image Upload --}}
	<script src="{{asset('/admin/js/imgUpload.js')}}"></script>

</body>
</html>
