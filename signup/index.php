<?php
	// Start the session
	session_start();
	
	if(isset($_SESSION["user"]))
	{
		echo 'Welcome '.$_SESSION["user"];
	}
	else {
		if (isset($_COOKIE["token"])){
			$cookie_name = $_COOKIE["token"];			
			// Database parameters
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "users";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}

			$sql = "select username from registration where token='".$cookie_name."'";

			if ($result = $conn->query($sql)) {
				$row = $result->fetch_assoc();
				  $user = $row["username"];
				  echo 'Welcome '.$user;
			}
		}
		else {
?>
		<a style="margin: 10px;" href="signup.php"> Sign UP </a>
		<a href="login.php"> Login </a>
<?php 	
		}
	}
?>