<HTML>
<HEAD>
	<link rel="stylesheet" href="bootstrap-4.5.3-dist/css/bootstrap.min.css">
	<style>
 body{
  background-image: url("lawyer.jpeg");

 }
 h3{color:white;}
 label{color: white;}
</style>
</head>
</HEAD>
<BODY>
<h3 style="text-align: center;"><u>Registration Advocate</u></h3>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="REGADV.php" method="POST">
				<div class="form-data">
					<label>Name</label>
					<input type="text" name="user" class="form-control">
				</div>
				<div class="form-data">
					<label>Advocate ID</label>
					<input type="number" name="adv_id" class="form-control">
				</div>
				<div class="form-data">
					<label>EMail</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-data">
					<label>Contact</label>
					<input type="tel" name="contact" class="form-control">
				</div>
				<div class="form-data">
					<label>Street Name</label>
					<input type="text" name="street" class="form-control">
				</div>
				<div class="form-data">
					<label>Pincode</label>
					<input type="number" name="pincode" class="form-control">
				</div>
				<div class="form-data">
					<label>City</label>
					<input type="text" name="city" class="form-control">
				</div>
				<div class="form-data">
					<label>Experience</label>
					<input type="number" name="expe" class="form-control">
				</div>
				<div class="form-data">
					<label>DOB</label>
					<input type="DATE" name="birth" class="form-control">
				</div><br>
				<div class="form-data">
					<label>Password</label>
					<input type="password" name="pwd" class="form-control">
				</div><br>
				<input type="submit" name="submit">
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

</BODY>
</HTML>

<?php
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecourts";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

	if(isset($_POST['submit']))
	{
		$user = $_POST['user'];	
		$id = $_POST['adv_id'];	
		$mail = $_POST['email'];	
		$con = $_POST['contact'];	
		$str = $_POST['street'];	
		$pin = $_POST['pincode'];	
		$ci = $_POST['city'];	
		$ex = $_POST['expe'];	
		$bir = $_POST['birth'];
		$pass = $_POST['pwd'];




		$sql = "INSERT INTO advocate (ADV_ID,ADV_NAME,EMAIL_ID,CONTACT_NO,DOB,WORK_PROFILE,STREET,PINCODE,CITY,Password)
									 VALUES ('$id', '$user', '$mail', '$con', '$bir', '$ex', '$str', '$pin', '$ci', '$pass')";

		 if ($conn->query($sql) === TRUE) {
    echo "New record created successfully"; 
     header("Location:prc.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}





	}

?>