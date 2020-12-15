<HTML>
<HEAD>
	<link rel="stylesheet" href="bootstrap-4.5.3/css/bootstrap.min.css">
  <style>
 body{
  background-image: url("lawyer.jpeg");

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
          <img class='rounded-circle' src="CLIENT.jpg" width="150" height="150" /><br>
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
          <H2 style="text-align:absolute"><B><I>FOR ADVOCATE LOGIN</B></I></H1> <br><img class='rounded-circle' src="PIC1.png" width="150" height="150"/><br>
          ADV ID:<br>
          <input type="text" name="adv_id">
          <br>
          PASSWORD:<br>
          <input type="password" name="passwd">
          <br>
          <br>
          <button class="btn btn-primary" onclick="location.href='homea.html';" name="signup">Submit</button>
          <p>To sign up <a href="REGADV.PHP" class="need">click here!!!!!!!</a></p>
</div>
        </form>
      </div>
  </div>
</div>
</BODY>
</HTML>


<?php 
$servername = "127.0.0.1:3307";
$username = "kvp";
$password = "123";
$dbname = "ecourts";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection



if(isset($_POST['submit'])){

  $id = $_POST["user"]; 
  $password = $_POST["pswd"];

   $sql = mysqli_query($conn, " SELECT * FROM sign_upcli WHERE user_id = '".$id."' and password123 = '".$password."'");

   if($row = mysqli_fetch_array($sql))
   {
    session_start();
    header("location:homec.php");
   }

   else
   {
    echo "failed to login ";
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
    header("location:homea.html");
   }

   else
   {
    echo "failed to login ";
   }




}

 ?>



