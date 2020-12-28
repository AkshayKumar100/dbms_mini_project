<?php

if(!isset($_SESSION['LOGIN'])){
    $_SESSION['msg']="Access denied.";
    header("Location:login_main.php");
}

?>
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
<h3 style="text-align: center;"><u>Case  form</u></h3>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <form action="add_case.php" method="post">
        <div class="form-data">
          <label>Case_id</label>
          <input type="text" name="cid" class="form-control">
        </div>
        <div class="form-data">
          <label>Case_type</label>
          <input type="text" name="type" class="form-control">
        </div>
        <div class="form-data">
          <label>Case details</label>
          <input type="text" name="details" class="form-control">
        </div>
        <div class="form-data">
          <label>Client id</label>
          <input type="text" name="clid" class="form-control">
        </div>
        <div class="form-data">
          <label>last hearing date</label>
          <input type="date" name="lhd" class="form-control">
        </div>
         <div class="form-data">
          <label>next hearing date</label>
          <input type="date" name="nhd" class="form-control">
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
 require 'conn.php';


  if(isset($_POST['submit']))
  {
    $id = $_POST['cid'];  
    $type = $_POST['type']; 
    $det = $_POST['details'];
    $cleid = $_POST['clid'];  
    $lh = $_POST['lhd'];  
    $nh = $_POST['nhd'];  
      
    

    $sql = "INSERT INTO case_ (CASE_ID,CASE_TYPE,CASE_DETAILS,LAST_HEARING_DATE,NEXT_HEARING_DATE,CLIENT_ID)
                   VALUES ('$id', '$type', '$det', '$lh', '$nh', '$cleid')";

     if ($conn->query($sql) === TRUE) {
    echo "New record created successfully"; 
     header("Location:my_case.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  }

?>