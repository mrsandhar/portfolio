<?php

// Start the session
session_start();
$_SESSION["msg"] = "";
$_SESSION["user"] = "";

$user = $_REQUEST['username'];
$pass = md5($_REQUEST['password']);

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

$sql = "select username, password from registration where username='".$user."' &&
		password='".$pass."' ";

if ($result = $conn->query($sql)) {
	$row = $result->fetch_assoc();
	  $usr = $row["username"];
	  $pwd = $row["password"];
		if ($user == $usr && $pass == $pwd) {
			$_SESSION["user"] = $user;
			if(isset($_REQUEST['remember'])) {
				$token = random_bytes(60);	// create random number to store in cookie and in database, match it when user open the website.
				var_dump(bin2hex($token));
				$cookie_name = "token";
				$cookie_value = $token;
				setcookie($cookie_name, $cookie_value, time() + (86400 * 60), "/");
				$sql = "update registration set token = '".$token."' where username='".$user."'";
				$conn->query($sql);
			}	
			header("location: homepage.php");
			die();
		}
		else {
			$_SESSION["msg"] = "Username or Password is Incorrect";
			header("location: login.php");
			die();
		}
}  
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>