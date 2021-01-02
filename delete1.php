<?php
require_once 'conn.php';


$CASE_ID = $_GET['CASE_ID'];
//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM case_ WHERE CASE_ID='$CASE_ID'");

//redirecting to the display page (index.php in our case)
header("Location:my_case.php");
?>
