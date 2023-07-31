<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Demo</title>
	<link rel="stylesheet" href="../css/global.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
	<style>
		:root {
            /* comment this var to remove image and see adaptative linear background */
            /*--login-background : rgba(0,0,0,0.4) url("https://images.unsplash.com/photo-1552526408-fa252623b415?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0MDEyNzJ8MHwxfHNlYXJjaHwxNnx8cHVycGxlJTIwZmxvd2VyfGVufDB8MHx8fDE2ODc5NDY5NjB8MA&ixlib=rb-4.0.3&q=80&w=1080&w=1920");*/
            --login-background: rgba(0, 0, 0, 0.4) url("https://images.unsplash.com/photo-1609607224685-44a36db58b10?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1080&w=1920");
            --login-logo: url("./dolibarr_logo.svg");
        }
	</style>
</head>
<body class="login-page">
<div class="login-page__container">
	<div class="login-screen">
		<div class="login-screen__content">
			<form class="login">

				<div class="login__logo" ></div>

				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" placeholder="User name / Email">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" placeholder="Password">
				</div>
				<button class="button login__submit">
					<span class="button__text">Log In Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
			</form>
			<div class="social-login">
				<span class="social-login__title">log in via</span>
				<div class="social-icons">
					<a href="#" class="social-login__icon fab fa-instagram"></a>
					<a href="#" class="social-login__icon fab fa-facebook"></a>
					<a href="#" class="social-login__icon fab fa-twitter"></a>
				</div>
			</div>
		</div>
		<div class="login-screen__background">
			<span class="login-screen__background__shape login-screen__background__shape4"></span>
			<span class="login-screen__background__shape login-screen__background__shape3"></span>
			<span class="login-screen__background__shape login-screen__background__shape2"></span>
			<span class="login-screen__background__shape login-screen__background__shape1"></span>
		</div>
	</div>
</div>
</body>
</html>