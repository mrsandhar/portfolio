<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
	<?php 	
		session_start();
		if(isset($_SESSION["msg"])) {
			echo '<h1>'; 
			echo $_SESSION["msg"]; 
			echo '</h1>';
		}			
	?>
	
	<h1> Login </h1>
	<div class="form">
		<form action = "checklogin.php" method = "POST">
			<input type="text" 		placeholder="Username"	name="username">
			<input type="password" 	placeholder="Password"	name="password">
			<input type="checkbox"	name="remember"> 
				<label> Remember me </label>
			<input type="submit" 	value="Login">
		</form>
	</div>
</body>

</html>