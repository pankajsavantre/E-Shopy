<?php
 	session_start();
 		if(isset($_SESSION['name']))
 		{
 			header("location:home.php");
 		}
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Admin | Login</title>
		<?php include "../assets/newcss.php" ?>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		
		<div class="form-box">
			<h3 class="card-header text-center text-primary font-weight-bold text-uppercase">E-Shop Admin</h3>
			<div class="form-sub-box">
				<form action="login.php" method="POST">
				<div class="form-group">
					<label for="user_name">Email address:</label>
					<input type="text" class="form-control" placeholder="Enter email" name="user_name" id="user_name">
				</div>
				<div class="form-group">
					<label for="user_password">Password:</label>
					<input type="password" class="form-control" placeholder="Enter password" name="user_password" id="user_password">
				</div>
				<button type="submit" class="btn btn-primary btn-block" name="submit">Login</button>
			</form>
			</div>
		</div>
		<?php include "../assets/newjs.php" ?>
	</body>
</html>
