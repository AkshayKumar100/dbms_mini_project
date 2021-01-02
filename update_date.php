<?php 
require 'conn.php';


if(isset($_POST['update']))
{	
  
	$caseid = mysqli_real_escape_string($conn,$_POST['caseid']);
	$lasthearingdate = date('Y-m-d', strtotime($_POST['lasthearingdate']));

$nexthearingdate = date('Y-m-d', strtotime($_POST['nexthearingdate']));

	
		 $sql="UPDATE case_ SET LAST_HEARING_DATE='$lasthearingdate',NEXT_HEARING_DATE='$nexthearingdate' WHERE CASE_ID='$caseid'";
			mysqli_query($conn, $sql);
			header("Location:my_case.php");

			
}

?>

<html>
<head>	
<link rel="stylesheet" href="bootstrap-4.5.3/css/bootstrap.min.css">
	<title>Edit Data</title>
	  <style>
  body{
  background-color:grey;
 }
 label{color:yellow;}
 label{color:black;font-weight:bold;}
</style>
</head>

<body>
<div class='fluid-container mt-5'>
	<form  method="post">
	<div class=row>
		<div class=col-md-4></div>
		<div class="form-group col-md-4">
			<label>CASE ID</label>
			<input type="text" name="caseid" placeholder="case id" class="form-control">
		</div>
	</div>
	<div class=row>
		<div class=col-md-4></div>
		<div class="form-group col-md-4">
			<label>LAST HEARING DATE</label>
			<input type="date" name="lasthearingdate" placeholder="lasthearingdate" class="form-control"><br>
		</div>

	</div>
	<div class=row>	
		<div class=col-md-4></div>
		<div class="form-group col-md-4">
			<label>NEXT HEARING DATE</label>
			<input type="date" name="nexthearingdate" placeholder="nexthearingdate" class="form-control" >
		</div>
	</div>
	<div class=row>
		<div class=col-md-4></div>
		<div class="form-group col-md-4">
			<input class="btn btn-primary" type="submit" name="update" value="Update"></td>
		</div>
	</div>
			
	</form>
</div>
</body>
</html>
