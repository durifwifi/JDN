<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Azzara Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="	{{asset('assets/img/icon.ico')}}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{asset('assets/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['{{asset('assets/css/fonts.css')}}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/azzara.min.css')}}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<!-- <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}"> -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	@stack('css')
</head>
<body>
	<div class="wrapper">
		<!--
			Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
        @include('sweetalert::alert')
       
        @include('layouts/header')
        @include('layouts/sidebar')
		@yield('content')
			
		
		
		<!-- Custom template | don't include it in your project! -->
		<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Topbar</h4>
						<div class="btnSwitch">
							<button type="button" class="changeMainHeaderColor" data-color="blue"></button>
							<button type="button" class="selected changeMainHeaderColor" data-color="purple"></button>
							<button type="button" class="changeMainHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeMainHeaderColor" data-color="green"></button>
							<button type="button" class="changeMainHeaderColor" data-color="orange"></button>
							<button type="button" class="changeMainHeaderColor" data-color="red"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>
		<!-- End Custom template -->
	</div>
</div>
<!--   Core JS Files   -->

<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
<!-- Azzara JS -->
<script src="{{asset('assets/js/ready.min.js')}}"></script>

<!-- jQuery UI -->
<script src="{{asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

<!-- jQuery Scrollbar -->
<script src="{{asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>



@stack('js')



<!-- Moment JS -->
<!-- <script src="{{asset('assets/js/plugin/moment/moment.min.js')}}"></script> -->

<!-- Chart JS -->
<!-- <script src="{{asset('assets/js/plugin/chart.js/chart.min.js')}}"></script> -->

<!-- jQuery Sparkline -->
<!-- <script src="{{asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script> -->

<!-- Chart Circle -->
<!-- <script src="{{asset('assets/js/plugin/chart-circle/circles.min.js')}}"></script> -->

<!-- Datatables -->
<!-- <script src="{{asset('assets/js/plugin/datatables/datatables.min.js')}}"></script> -->

<!-- Bootstrap Notify -->
<!-- <script src="{{asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script> -->

<!-- Bootstrap Toggle -->
<!-- <script src="{{asset('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js')}}"></script> -->

<!-- jQuery Vector Maps -->
<!-- <script src="{{asset('assets/js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script> -->

<!-- Google Maps Plugin -->
<!-- <script src="{{asset('assets/js/plugin/gmaps/gmaps.js')}}"></script> -->

<!-- Sweet Alert -->
<!-- <script src="{{asset('assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script> -->



<!-- Azzara DEMO methods, don't include it in your project! -->
<!-- <script src="{{asset('assets/js/setting-demo.js')}}"></script>
<script src="{{asset('assets/js/demo.js')}}"></script> -->
</body>
</html>