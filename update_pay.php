<?php 
require 'conn.php';
if(isset($_POST['update']))
{	
  
	$caseid = mysqli_real_escape_string($conn,$_POST['caseid']);
	
	$amt = mysqli_real_escape_string($conn,$_POST['amount']);

	
		 $sql="UPDATE payment SET Amount='$amt' WHERE CASE_ID='$caseid'";
			mysqli_query($conn, $sql);
header("Location:fee.php");
			
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
 label{color:black;font-weight:bold;}
 h2{color:black;}
</style>
</head>

<body>
	<form  method="post" action=" " class="mt-5" >
		<div class=row>
		<div class=col-md-4></div>
		<div class="form-group col-md-4">
				<lable>CASE_ID<lable>
				<input type="text" name="caseid" placeholder="Entercase id" class="form-control">
				</div>
				</div>

		<div class=row>
		<div class=col-md-4></div>
		<div class="form-group col-md-4">	
			<lable>AMOUNT<lable>
				<input type="number" name="amount" placeholder="Enter Amount" class="form-control" ><br><br>
			<input class="btn btn-primary" type="submit" name="update" value="Update" ></td>
		</div>
				</div>
	</form>
</body>
</html>
