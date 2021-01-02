<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="bootstrap-4.5.3\css\bootstrap.min.css">
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color:  rgba(10,10,10,.4);
}
* {box-sizing: border-box; }

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}


/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
.contain{
  width: 40%
}
h6{
  color:red;
}

</style>
</head>
<body>
<div class="container contain">
  <form method="post">
    <div class="container">
      <h1 class='text-center'>Client Sign Up</h1>
      Please fill in this form to create an account.
      <hr>

      <?php
      if(isset($_SESSION['error'])){
        echo "<h6>ALL ENTRIES ARE MANDATORY</h6> <br>";
      }
      unset($_SESSION['error']);
      ?>

      <label for="user_id"><b>User_id</b></label>
      <input type="text" placeholder="Enter userid" name="user_id">
      
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email">
      
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw">

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat">
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class='form-row justify-content-sm-center'>
        <input class="btn btn-primary" type="submit" value="SIGN-IN" name="submit">
        <div class="col-md-1"></div>
        <form action="login_mani.php">
        <input class="btn btn-dark" type="submit" name='add_later' value="CANCEL"> 
        </form>
    </div>
    </div>
  </form>
  </div>
</body>
</html>





<?php 
require 'conn.php';
if(isset($_POST['add_later'])){
        header('location: login_main.php');
        return;
    }

if(isset($_POST['submit'])){
  if(!empty($_POST["user_id"])&&!empty($_POST["email"])&&!empty($_POST["psw"])&&!empty($_POST["psw-repeat"])){
    $id = $_POST["user_id"];
    $email = $_POST["email"]; 
    $password = $_POST["psw"];
    $repeat_password = $_POST["psw-repeat"];
    $sql = "INSERT INTO sign_upcli (user_id, email, password123, repeat_password) VALUES ('$id', '$email', '$password', '$repeat_password')";

    if ($conn->query($sql) === TRUE) {
      header('location:login_main.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  else{
    $_SESSION['error']= "ALL ENTRIES ARE MANDATORY";
    header('location:CLISIGN.php');
  } 
}
 ?>