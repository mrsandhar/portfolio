<?php

$fast = null; 
$cheap = null;
$extensive = null;

$phase = $_REQUEST['phase'];
//echo $phase;

if (isset($_REQUEST['fast'])) {
	$fast = "fast";
	//echo $fast;
}

if (isset($_REQUEST['cheap'])) {
	$cheap = "cheap";
	//echo $cheap;
}

if (isset($_REQUEST['extensive'])) {
	$extensive = "extensive";
	//echo $extensive;
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if ($fast != null && $extensive !=null) {
	$sql = "select mhead, method from methods where phase='$phase' and scope='fast' and scopeone='extensive'";
}

if ($fast != null && $cheap !=null) {
	$sql = "select mhead, method from methods where phase='$phase' and scope='fast' and scopeone='cheap'";
}

if ($extensive != null && $cheap !=null) {
	$sql = "select mhead, method from methods where phase='$phase' and scope='extensive' and scopeone='cheap'";
}


if ($result = $conn->query($sql)) {
  while($row = $result->fetch_assoc()) {
	  $mhead = $row["mhead"];
	  $method = $row["method"];
		
		echo '<h1>'.$mhead. '</h1> <p>'.$method.'</p>';
  }  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$result->free();
$conn->close();

?>