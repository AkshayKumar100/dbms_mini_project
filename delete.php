<?php
 require "conn.php";


$CLIENT_ID = $_GET['CLIENT_ID'];
//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM client WHERE CLIENT_ID='$CLIENT_ID'");

//redirecting to the display page (index.php in our case)
header("Location:my_client.php");
?>





<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	body{
  background-image: url("lawyer.jpeg");

 }
</style>
</head>
<body>
	<form method="post" action="delete.php">
		<input type="text" name="Client_id" placeholder="Client id">
		<input type="submit" name="delete" value="delete">
		


	</form>
</body>
</html> -->