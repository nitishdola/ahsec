<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	
	<title>AHSEC Dashboard @yield('title')</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-responsive.min.css') }}">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="{{ asset('css/plugins/jquery-ui/smoothness/jquery-ui.css') }}">
	<link rel="stylesheet" href="{{ asset('css/plugins/jquery-ui/smoothness/jquery.ui.theme.css') }}">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<!-- Color CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/themes.css') }}">


	<!-- jQuery -->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	
	
	<!-- Nice Scroll -->
	<script src="{{ asset('assets/js/plugins/nicescroll/jquery.nicescroll.min.js') }}"></script>
	<!-- jQuery UI -->
	<script src="{{ asset('assets/js/plugins/jquery-ui/jquery.ui.core.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/jquery-ui/jquery.ui.widget.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/jquery-ui/jquery.ui.mouse.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/jquery-ui/jquery.ui.draggable.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/jquery-ui/jquery.ui.resizable.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/jquery-ui/jquery.ui.sortable.min.js') }}"></script>
	<!-- Touch enable for jquery UI -->
	<script src="{{ asset('assets/js/plugins/touch-punch/jquery.touch-punch.min.js') }}"></script>
	<!-- slimScroll -->
	<script src="{{ asset('assets/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

	<!-- Theme framework -->
	<script src="{{ asset('assets/js/eakroko.min.js') }}"></script>
	<!-- Theme scripts -->
	<script src="{{ asset('assets/js/application.min.js') }}"></script>
	<!-- Just for demonstration -->
	<script src="{{ asset('assets/js/demonstration.min.js') }}"></script>
	
	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	@yield('pageCss')
</head>

<body>
	<div id="navigation">
		@include('administrator.common.top_navigation')
	</div>
	<div class="container-fluid" id="content">
		<div id="left">
			@include('administrator.common.left')
		</div>
		<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>@yield('pageTitle')</h1>
					</div>
					<div class="pull-right">
						<ul class="stats">
							<li class='lightred'>
								<i class="icon-calendar"></i>
								<div class="details">
									<span class="big">{{ date('F d, Y')}}</span>
									<span> {{ date('l')}} <span id="time-part"></span></span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="breadcrumbs">
					<ul>
						@yield('breadCrumb')
					</ul>
					<div class="close-bread">
						<a href="#"><i class="icon-remove"></i></a>
					</div>
				</div>
				<div class="row-fluid">
					@yield('mainContent')
				</div>

			</div>
		</div></div>
		<script src="{{ asset('assets/js/moment.min.js') }}"></script>
		<script>
			$(document).ready(function() { 
				var interval = setInterval(function() {
			        var momentNow = moment();
			        $('#time-part').html(momentNow.format('hh:mm:ss A'));
			    }, 100);
			});
		</script>
		@yield('pageJs')
	</body>

	</html>

