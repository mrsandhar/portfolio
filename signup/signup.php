<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
	<h1> Sign Up </h1>
	<div class="form">
		<form action="checkuser.php" method="POST">
			<input type="text" 		placeholder="Username"	name="username">
			<input type="email" 	placeholder="Email"		name="email">
			<input type="password" 	placeholder="Password"	name="password">
			<input type="submit" 	Value="Sign Up">
		</form>
	</div>
</body>

</html>