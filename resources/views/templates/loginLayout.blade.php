<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	{{-- Bootstrap --}}
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">

	{{-- Font Awesome --}}
	<link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css')}}">

	{{-- Ionicons --}}
	<link rel="stylesheet" href="{{asset('plugins/Ionicons/css/ionicons.min.css')}}">

	{{-- Theme style --}}
	<link rel="stylesheet" href="{{asset('/admin/css/AdminLTE.min.css')}}">

	{{-- Skins --}}
	<link rel="stylesheet" href="{{asset('/admin/css/skins/skin-black.min.css')}}">

	{{-- iCheck --}}
  <link rel="stylesheet" href="{{asset('plugins/iCheck/square/blue.css')}}">

	{{-- Owns --}}
	<link rel="stylesheet" href="{{asset('/admin/css/own.css')}}">

	{{-- Google Font --}}
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

	<title>Paiven Control | {{$title}}</title>

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Paiven |</b> {{$title}}</a>
  </div>
	@include('templates.alert')
	<div class="login-box-body">
	<br>
  	@yield('content')
	</div>
</div>
<!-- /.login-box -->

{{-- jQuery 3 --}}
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

{{-- Bootstrap 3.3.7 --}}
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

{{-- AdminLTE App --}}
<script src="{{asset('/admin/js/adminlte.min.js')}}"></script>

<!-- iCheck -->
<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('#remember').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
		$('#check').css('display','')
  });
</script>
</body>
</html>
