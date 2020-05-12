<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Web Icon -->
		<link rel="icon" type="image/png" sizes="32x32" href="\icon\favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="\icon\favicon-16x16.png">
		<link rel="manifest" href="\site.webmanifest">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
		<link rel="apple-touch-icon" sizes="180x180" href="\icon\apple-touch-icon.png">
		<link rel="shortcut icon" type="image/x-icon" href="\icon\favicon.ico" />
	<!-- Web Icon -->
	<title>Ezlaundry | Sign In</title>
	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="/css/signin.css">
	<!-- Font -->
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:500&display=swap" rel="stylesheet">
</head>
<body>
	<img class="wave" src="/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="/img/bg.svg">
		</div>
		<div class="login-content">
			<div class="content">
				<div id="button-box">
					<div id="btn"></div>
					<button type="button" class="toggle-btn active" onclick="login()">Log In</button>
					<button type="button" class="toggle-btn" onclick="register()">Register</button>
				</div>
			<!-- Log In -->
				<form method="POST" id="login" class="input-grup" action="{{ route('login') }}">
					@csrf
					<img src="/img/nav-logo.png">
					<h2 class="title">Welcome</h2>
					<div class="input-div one">
						<div class="i">
								<i class="fas fa-user"></i>
						</div>
						<div class="div">
								<h5>Email</h5>
								<input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
						</div>
					</div>
					<div class="input-div pass">
						<div class="i"> 
								<i class="fas fa-lock"></i>
						</div>
						<div class="div">
							<h5>Password</h5>
							<input id="password_" type="password" class="input @error('password_') is-invalid @enderror" name="password" required autocomplete="current-password">
						</div>
					</div>
					@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong><br>
						</span>
					@enderror
					@error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong><br>
                        </span>
					@enderror
					@if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    @endif
					<input type="submit" class="btn btn-primary" value="Login">
				</form>
			<!-- Log In -->

			<!-- Register -->
				<form method="POST" id="register" class="input-grup" action="{{ route('register') }}">
					@csrf
					<div class="input-div pass">
						<div class="i"></div>
						<div class="div">
							<h5>Email</h5>
							<input id="email_regis" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
						</div>
					</div>
					<div class="input-div pass">
						<div class="i"></div>
						<div class="div">
							<h5>Nama Lengkap</h5>
							<input id="nama_lengkap" type="text" class="input" name="Nama_Lengkap" value="{{ old('Nama_Lengkap') }}" required autocomplete="Nama_Lengkap" >
						</div>
					</div>
					<div class="input-div pass">
						<div class="i"></div>
						<div class="div">
							<h5>Alamat</h5>
							<input id="alamat" type="text" class="input" name="Alamat" value="{{ old('Alamat') }}" required autocomplete="Alamat">
						</div>
					</div>
					<div class="input-div one">
						<div class="i"></div>
						<div class="div">
							<h5>Username</h5>
							<input id="username" type="text" class="input @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">
						</div>
					</div>
					<div class="input-div one">
						<div class="i"></div>
						<div class="div">
							<h5>Password</h5>
							<input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
						</div>
					</div>
					<div class="input-div one">
						<div class="i"></div>
						<div class="div">
							<h5>Confirm Password</h5>
							<input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
						</div>
					</div>
					@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong><br>
						</span>
					@enderror
					@error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong><br>
                        </span>
					@enderror
					@error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong><br>
                        </span>
                    @enderror
					<input type="submit" class="btn btn-primary" value="Register">
				</form>
			<!-- Register -->
			</div>
		</div>
    </div>
	<script src="/js/signin.js"></script>
</body>
</html>