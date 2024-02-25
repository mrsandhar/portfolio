<?php

// Start the session
session_start();
$_SESSION["msg"] = "";

$user = $_REQUEST['username'];
$email = $_REQUEST['email'];
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

$sql = "insert into registration (username, password, email) 
		values ('".$user."', '".$pass."', '".$email."')";

if ($conn->query($sql)) {
	$_SESSION["msg"] = "Sign Up Successful";
	header("location: login.php");
}  
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>