<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset ('vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset ('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset( 'css/main.css') }}">
<!--===============================================================================================-->
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>
<body>
	<form action="{{route('auth.check')}}" method="post">
		@if(Session::get('success'))
			<div class="alert alert-success">
				{{ Session::get('success') }}
			</div>
		@endif
		@if(Session::get('fail'))
		<div class="alert alert-danger">
			{{ Session::get('fail') }}
		</div>
		@endif
         @csrf
			<div class="limiter">
				<div class="container-login100">
					<div class="wrap-login100 p-t-50 p-b-90">
						<form class="login100-form validate-form flex-sb flex-w">
							<span class="login100-form-title p-b-51">
								Login
							</span>

							
							<div class="wrap-input100 validate-input m-b-16" data-validate = "Email is required">
								<input class="input100" type="email" name="email" placeholder="Email">
								<span class="focus-input100"></span>
							</div>
							
							
							<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
								<input class="input100" type="password" name="password" placeholder="Password">
								<span class="focus-input100"></span>
							</div>
							
							<div class="flex-sb-m w-full p-t-3 p-b-24">
								<div class="contact100-form-checkbox">
									<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
									<label class="label-checkbox100" for="ckb1">
										Remember me
									</label>
								</div>

								<div>
									<a href="#" class="txt1">
										Forgot Password?
									</a>
								</div>
							</div>

							<div class="container-login100-form-btn m-t-17">
								<button >
					<input class="login100-form-btn" type="submit" name="submit" value="Submit">
								
								</button>
							</div>
							<a href="{{ route('reg.register') }}">I don't have an account, create new</a>
						</form>
					</div>
				</div>
			</div>
			

			<div id="dropDownSelect1"></div>
			<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<!--===============================================================================================-->
			<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
		<!--===============================================================================================-->
			<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
		<!--===============================================================================================-->
			<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
			<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<!--===============================================================================================-->
			<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
		<!--===============================================================================================-->
			<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
			<script src="{{asset( 'vendor/daterangepicker/daterangepicker.js') }}"></script>
		<!--===============================================================================================-->
			<script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
		<!--===============================================================================================-->
			<script src="{{ asset('js/loginmain.js') }}"></script>
			<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
			{!! Toastr::message() !!}    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
				
		</form>

</body>
</html>
