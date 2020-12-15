<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecourts";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection



	$id = $_POST["user_id"];
	$email = $_POST["email"];
	$password = $_POST["psw"];
	$repeat_password = $_POST["psw-repeat"];
	$sql = "INSERT INTO sign_upcli (user_id, email, password, repeat_password) VALUES ('$id', '$email', '$password', '$repeat_password')";

	

 ?>
