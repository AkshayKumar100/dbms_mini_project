<HTML>
<HEAD>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <style>
  body{
  background-image: url("lawyer.jpeg");

 }
 label{color:yellow;}
 h3{color:blue;}
</style>
</HEAD>
<BODY>
<h3 style="text-align: center;"><u>Junior Advocate form</u></h3>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <form action="" method="post">
        <div class="form-data">
          <label>Jr_name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="form-data">
          <label>Contact no</label>
          <input type="text" name="no" class="form-control">
        </div>
        <div class="form-data">
          <label>Jr.type</label>
          <input type="text" name="type" class="form-control">
        </div>
        <div class="form-data">
          <label>Experience</label>
          <input type="text" name="expr" class="form-control">
        </div>
        <br>
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


$conn = mysqli_connect($servername, $username, $password, $dbname);



  if(isset($_POST['submit']))
  {
    $jname = $_POST['name'];  
    $cno = $_POST['no']; 
    $typ = $_POST['type'];
    $exp = $_POST['expr'];  
      
    

    $sql = "INSERT INTO junior_adv (Jr_name,Jr_type,Jr_contact,Jr_experience)
                   VALUES ('$jname', '$typ', '$cno', '$exp')";

     if ($conn->query($sql) === TRUE) {
    echo "New record created successfully"; 
    header("Location:jadv.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  }

?>