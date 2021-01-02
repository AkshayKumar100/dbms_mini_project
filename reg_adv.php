<?php 
session_start();
if(isset($_SESSION['msg'])){
  echo '<h2 style = "color:red">'.$_SESSION['msg'].'</h2>';
  unset($_SESSION['msg']);
}
?>

<HTML>
<HEAD>
	<link rel="stylesheet" href="bootstrap-4.5.3/css/bootstrap.min.css">
	<style>
 body{
  background-image: url("css/img/lawyer.jpeg");

 }
 h1{color:white;}
 label{color: white;}
</style>
</HEAD>
<BODY>
<h1 style="text-align: center;"><u>Registration Advocate</u></h1>
<div class="container-fluid ">
	<form action="reg_adv.php" method="POST">
 		<div class='form-row justify-content-md-center'>
			<div class="form-group col-md-3">
				<label for='user'>Name</label>
				<input type="text" name="user" class="form-control">
			</div>
			<div class="form-group col-md-3">
				<label>Advocate ID</label>
				<input type="number" name="adv_id" class="form-control">
			</div>
		</div>

 		<div class='form-row justify-content-md-center'>		
			<div class="form-group col-md-3">
				<label>EMail</label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group col-md-3">
				<label>Contact</label>
				<input type="tel" name="contact" class="form-control">
			</div>
		</div>

 		<div class='form-row justify-content-md-center'>
			<div class="form-group col-md-3">
				<label>Street Name</label>
				<input type="text" name="street" class="form-control">
			</div>
			<div class="form-group col-md-3">
				<label>Pincode</label>
				<input type="number" name="pincode" class="form-control">
			</div>
		</div>

		<div class='form-row justify-content-md-center'>
			<div class="form-group col-md-3">
				<label>City</label>
				<input type="text" name="city" class="form-control">
			</div>
			<div class="form-group col-md-3">
				<label>Experience</label>
				<input type="number" name="expe" class="form-control">
			</div>
 		</div>

 		<div class='form-row justify-content-md-center'>
			<div class="form-group col-md-3">
				<label>DOB</label>
				<input type="DATE" name="birth" class="form-control">
			</div><br>
			<div class="form-group col-md-3">
				<label>Password</label>
				<input type="password" name="pwd" class="form-control">
			</div><br>
		</div>
		<div class='form-row justify-content-sm-center'>
        <input class='btn btn-primary' type="submit" name="Submit">
        <div class="col-md-1"></div>
        <form action="login_mani.php">
        <input class="btn btn-dark" type="submit" name='add_later' value="CANCEL"> 
        </form>
    </div>
	</form>

	
</div>

</BODY>
</HTML>

<?php
require 'conn.php';

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "ecourts";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection

if(isset($_POST['add_later'])){
        header('location: login_main.php');
        return;
    }

	if(isset($_POST['Submit']))
	{
		if(!empty( $_POST['user'])&&!empty( $_POST['adv_id'])&&!empty( $_POST['email'])&&!empty( $_POST['contact'])&&!empty($_POST['street'])&&!empty($_POST['pincode'])&&!empty($_POST['city'])&&!empty( $_POST['expe'])&&!empty($_POST['birth'])&&!empty( $_POST['pwd'])){
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

			$sql = "INSERT INTO advocate (ADV_ID,ADV_NAME,EMAIL_ID,CONTACT_NO,DOB,WORK_PROFILE,STREET,PINCODE,CITY,password)
										VALUES ('$id', '$user', '$mail', '$con', '$bir', '$ex', '$str', '$pin', '$ci', '$pass')";

			if ($conn->query($sql) === TRUE) {
				$_SESSION['msg']= "New record created successfully"; 
				header("Location:login_main.php");
			}
			
		}//error not printing 
		else {
			$_SESSION['msg'] ="All fields required".$conn->error;
			header("Location:reg_adv.php");
		}





	}

?>