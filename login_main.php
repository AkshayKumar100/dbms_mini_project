<?php
if(isset($_SESSION['msg'])){
  echo '<h2>'.$_SESSION['msg'].'</h2>';
}
?>

<HTML>
<HEAD>
	<link rel="stylesheet" href="bootstrap-4.5.3/css/bootstrap.min.css">
  <style>
 body{
  background-image: url("css/img/lawyer.jpeg");

 }
 h2{color:white;}
 td{color: white;}
 form{color:white;}

</style>

</HEAD>
<BODY>
  <div class="container" style='margin-top:150px;'>
 		    <form action = "#" method = "post">
          <div class='form-row justify-content-md-center'>
        <div class=' col-md-6 text-center'>
          <H2 style="text-align:center"><B><I>FOR CLIENT LOGIN</B></I></H1>
          <br>
          <img class='rounded-circle' src="css/img/CLIENT.jpg" width="150" height="150" /><br>
          USER_ID:<br>
          <input type="text" name="user">
          <br>
          PASSWORD:<br>
          <input type="password" name="pswd">
          <br><br>
          <button class="btn btn-primary" name="submit">Submit</button>
          <p>To sign up <a href="CLISIGN.php" class="need">click here!!!!!!!</a></p>
</div>
<div class='col-md-6 text-center'>
          <H2 style="text-align:absolute"><B><I>FOR ADVOCATE LOGIN</B></I></H1> <br><img class='rounded-circle' src="css/img/advocate.png" width="150" height="150"/><br>
          ADV ID:<br>
          <input type="text" name="adv_id">
          <br>
          PASSWORD:<br>
          <input type="password" name="passwd">
          <br>
          <br>
          <button class="btn btn-primary" onclick="location.href='adv_home.php';" name="signup">Submit</button>
          <p>To sign up <a href="reg_adv.php" class="need">click here!!!!!!!</a></p>
</div>
        </form>
      </div>
  </div>
</div>
</BODY>
</HTML>


<?php 
// $servername = "127.0.0.1:3308";
// $username = "root";
// $password = "";
// $dbname = "ecourts";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $dbname);
// // Check connection

require 'conn.php';

if(isset($_POST['submit'])){

  $id = $_POST["user"]; 
  $password = $_POST["pswd"];

   $sql = mysqli_query($conn, " SELECT * FROM sign_upcli WHERE user_id = '".$id."' and password123 = '".$password."'");

   if($row = mysqli_fetch_array($sql))
   {
    session_start();
    header("location:cli_home.php");
   }

   else
   {
    //  TODO :: error center
    echo "<div class='container-fluid' style='background-color:white;width:min;'><h2 class='text-center' style='color:red'> Failed to login </h2></div>";
   }


//   if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }


}
if(isset($_POST['signup'])){

  $aid = $_POST["adv_id"];
  $apsw = $_POST["passwd"];
  $sql = mysqli_query($conn, " SELECT * FROM advocate WHERE ADV_ID = '".$aid."' and password = '".$apsw."'");

   if($row = mysqli_fetch_array($sql))
   {
    session_start();
    $_SESSION['Login']= true;
    header("location:adv_home.php");
   }

   else
   {
    echo "failed to login ";
   }




}

 ?>



