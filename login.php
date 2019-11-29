<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" type="image/png" href="img/AF.png">
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	
	<section>
		<div class="block">

			<div class="Loginlogo">
				<a href="index.php"><img src="img/logo.png" alt="AuthForm"></a>
			</div>

			<form method="post" action="login.php">
				 <?php include('errors.php'); ?>
				<p class="loginP">Username</p>
				<input type="text" name="username" placeholder="Username"> <br> <br>
				<p class="loginP">Password</p>
				<input type="password" name="password" placeholder="Password"> <br> <br>
				<button type="submit" class="btn" name="login_user">Login</button>
			</form>
			
			<footer>
				<p>Not yet a member? <a href="signup.php">Sign Up</a></p>
			</footer>
		</div>
	</section>

</body>
</html>