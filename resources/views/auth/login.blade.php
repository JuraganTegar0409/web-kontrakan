<?php
// ambil pesan jika ada
  if (isset($_GET["pesan"])){
  $pesan = "<p> {$_GET["pesan"]} <p>";
  }
else {
  $pesan = "";
  }
// ambil nilai nama jika ada
if (isset($_GET["email"])){
  $nilai_email = $_GET["email"];
  }
else {
  $nilai_email = "";
  }
// ambil nilai email jika ada
if (isset($_GET["password"])){
  $nilai_password = $_GET["password"];
  }
else {
  $nilai_password = "";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOGIN | KONTRAKAN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	  <!-- Favicon -->
	  <link rel="icon" href=" {{ asset('assets/img/brand/favicon.png') }}" type="image/png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap_login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap_login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap_login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap_login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap_login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap_login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap_login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap_login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/bootstrap_login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/bootstrap_login/images/bg-03.jpg');">
			<div class="wrap-login100">
				
				<form class="login100-form " method="POST" action="{{ route('login') }}">
					@csrf
					<div class="login100-form-logo">
						<img src="{{asset('assets/bootstrap_login/images/bg-02.jpeg')}}" alt="AVATAR">
					</div>

					<span class="login100-form-title p-b-30 p-t-27">
						Log in 
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Email is required">
						<input class="input100 @error('email') is-invalid @enderror " type="email" name="email" value="{{ old('email') }}" placeholder="Email Address" style="text-align: center;">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100 @error('password') is-invalid @enderror" type="password" name="password" value="{{ old('password') }}" placeholder="Masukkan Password Anda" style="text-align: center;">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message}}</strong>
						</span>
						@enderror
					</div>

					<!-- <div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> -->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							{{ __('Login') }}
						</button>
					</div>

					<div class="text-center p-t-40">
					@if (Route::has('register'))
						<a class="txt1" href="{{ route('register') }}">
							{{ __('Belum Punya Akun? Yuk Register Dulu') }} 
						</a>
						@endif
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{asset('assets/bootstrap_login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/bootstrap_login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/bootstrap_login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('assets/bootstrap_login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/bootstrap_login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/bootstrap_login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('assets/bootstrap_login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/bootstrap_login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('assets/bootstrap_login/js/main.js')}}"></script>

</body>
</html>