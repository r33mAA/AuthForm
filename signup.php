<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" type="image/png" href="img/AF.png">
	<meta charset="UTF-8">
	<title>Sign Up</title>
</head>
<body>
	
	<section>
		<div class="block">

			<div class="Loginlogo">
				<a href="index.php"><img src="img/logo.png" alt="AuthForm"></a>
			</div>

			<form method="post" action="signup.php">
				<?php include('errors.php'); ?>
				<p class="loginP">Username</p>
				<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username"> <br> <br>
				<p class="loginP">E-mail</p>
				<input type="email" name="email" value="<?php echo $email; ?>" placeholder="E-mail"> <br> <br>
				<p class="loginP">Password</p>
				<input type="password" name="password_1" placeholder="Password"> <br> <br>
				<p style="font-size: 30px; padding-bottom: 10px;">Confirm Password</p>
				<input type="password" name="password_2" placeholder="Password"> <br> <br>
				<button type="submit" class="btn" name="reg_user">Sign Up</button>
			</form>
			
			<footer>
				<p>Already a member? <a href="login.php">Sign in</a></p>
			</footer>
		</div>
	</section>

</body>
</html>