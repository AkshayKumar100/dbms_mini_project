<?php
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecourts";


$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection


$CASE_ID = $_GET['CASE_ID'];
//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM case_ WHERE CASE_ID='$CASE_ID'");

//redirecting to the display page (index.php in our case)
header("Location:mcase.php");
?>
