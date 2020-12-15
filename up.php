<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecourts";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


if(isset($_POST['update']))
{	
  
	$caseid = mysqli_real_escape_string($conn,$_POST['caseid']);
	$lasthearingdate = date('Y-m-d', strtotime($_POST['lasthearingdate']));

$nexthearingdate = date('Y-m-d', strtotime($_POST['nexthearingdate']));

	
		 $sql="UPDATE case_ SET LAST_HEARING_DATE='$lasthearingdate',NEXT_HEARING_DATE='$nexthearingdate' WHERE CASE_ID='$caseid'";
			mysqli_query($conn, $sql);

			
}

?>

<html>
<head>	
	<title>Edit Data</title>
	  <style>
  body{
  background-image: url("lawyer.jpeg");

 }
 label{color:yellow;}
 h3{color:blue;}
</style>
</head>

<body>
	<a href="mcase.php">VIEW THE UPDATED RECORD</a>
	<br/><br/>
	
	<form  method="post" >
		
				<h3>CASE ID</h3>
				<input type="text" name="caseid" placeholder="case id"><br>
			<h3>LAST HEARING DATE</h3>
				<input type="date" name="lasthearingdate" placeholder="lasthearingdate"><br>
			<h3>NEXT HEARING DATE</h3>
				<input type="date" name="nexthearingdate" placeholder="nexthearingdate" ><br><br>
			<input type="submit" name="update" value="Update" href='http://localhost/mcase.php'></td>
			
	</form>
</body>
</html>
