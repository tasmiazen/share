<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="{{ URL::to('css/style.css') }}">
		
		  <link rel="stylesheet" href="{{ URL::to('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
		  <link rel="stylesheet" href="{{ URL::to('bower_components/font-awesome/css/font-awesome.min.css') }}">
		  <link rel="stylesheet" href="{{ URL::to('bower_components/Ionicons/css/ionicons.min.css') }}">
		  <link rel="stylesheet" href="{{ URL::to('bower_components/jvectormap/jquery-jvectormap.css') }}">
		  <link rel="stylesheet" href="{{ URL::to('dist/css/AdminLTE.min.css') }}">
		  <link rel="stylesheet" href="{{ URL::to('dist/css/skins/_all-skins.min.css') }}">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
	
@if(Auth::check())
		
	@include('layouts.header')
	
	@include('layouts.sidebar')
@endif

	
    @yield('content')
	
    <script type="text/javascript" src="{{ URL::to('js/jquery-3.0.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/script.js') }}"></script>
	<script src="{{ URL::to('bower_components/jquery/dist/jquery.min.js') }}"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="{{ URL::to('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<!-- FastClick -->
	<script src="{{ URL::to('bower_components/fastclick/lib/fastclick.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ URL::to('dist/js/adminlte.min.js') }}"></script>
	<!-- Sparkline -->
	<script src="{{ URL::to('bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
	<!-- jvectormap  -->
	<script src="{{ URL::to('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
	<script src="{{ URL::to('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<!-- SlimScroll -->
	<script src="{{ URL::to('bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<!-- ChartJS -->
	<script src="{{ URL::to('bower_components/chart.js/Chart.js') }}"></script>
	
	<script src="{{ URL::to('dist/js/pages/dashboard2.js') }}"></script>
	
	<script src="{{ URL::to('dist/js/demo.js') }}"></script>
    @stack('scripts')
  
    </body>
</html>
