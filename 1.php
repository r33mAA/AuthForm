<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" type="image/png" href="img/AF.png">
	<meta charset="UTF-8">
	<title>1</title>
</head>
<body>
			
<header>
	<div class="headerWrapper">
		<div class="headerContent">
			<div class="logo">
				<a href="index.php"><img src="img/logo.png" alt="AuthForm"></a>
			</div>
			<ul>
				<li><a href="1.php">1</a></li>
				<li><a href="2.php">2</a></li>
				<li><a href="3.php">3</a></li>
			</ul>			
			<div class="authButtons">				
				<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
			</div>
		</div>
	</div>
</header>
	
<section>
	<?php  if (isset($_SESSION['username'])) : ?>
    	<p>1</p>
    	
    <?php endif ?>
</section>

</body>
</html>