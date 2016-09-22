<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	
	<title>AHSEC - Login</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-responsive.min.css') }}">
	<!-- icheck -->
	<link rel="stylesheet" href="{{ asset('assets/css/plugins/icheck/all.css') }}">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<!-- Color CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/themes.css') }}">


	<!-- jQuery -->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	
	<!-- Nice Scroll -->
	<script src="{{ asset('assets/js/plugins/nicescroll/jquery.nicescroll.min.js') }}"></script>
	<!-- Validation -->
	<script src="{{ asset('assets/js/plugins/validation/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('assets/js/plugins/validation/additional-methods.min.js') }}"></script>
	<!-- icheck -->
	<script src="{{ asset('assets/js/plugins/icheck/jquery.icheck.min.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/js/eakroko.js') }}"></script>

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
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />

</head>

<body class='login'>
	<div class="wrapper">
		<h1><a href="#">AHSEC</a></h1>
		<div class="login-body">
			<h2>SIGN IN</h2>
			<form class="form-validate" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
				<div class="control-group {{ $errors->has('username') ? ' has-error' : '' }}">
					<div class="email controls">
						<input type="text" name='username' placeholder="Username" class='input-block-level' data-rule-required="true" data-rule-email="true">
					</div>
				</div>
				<div class="control-group {{ $errors->has('password') ? ' has-error' : '' }}">
					<div class="pw controls">
						<input type="password" name="password" placeholder="Password" class='input-block-level' data-rule-required="true">
					</div>
				</div>
				<div class="submit">
					<div class="remember">
						
					</div>
					<input type="submit" value="Sign me in" class='btn btn-primary'>
				</div>
			</form>
			<div class="forget">
				<a href="#"><span></span></a>
			</div>
		</div>
	</div>
</body>

</html>
