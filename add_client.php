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
<h3 style="text-align: center;"><u>Client  form</u></h3>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <form action="" method="post">
        <div class="form-data">
          <label>Client_Id</label>
          <input type="text" name="id" class="form-control">
        </div>
        <div class="form-data">
          <label>Client Name</label>
          <input type="text" name="nam" class="form-control">
        </div>
        <div class="form-data">
          <label>Contact</label>
          <input type="number" name="cont" class="form-control">
        </div>
        <div class="form-data">
          <label>Address</label>
          <input type="text" name="add" class="form-control">
        </div>
         <div class="form-data">
          <label>Case_id</label>
          <input type="text" name="caid" class="form-control">
        </div>
       <br>
         <input type="submit" onclick="location.href='mclient.php'" name="submit">

      </form>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>

</BODY>
</HTML>



<?php
  require "conn.php";


  if(isset($_POST['submit']))
  {
    $cname = $_POST['nam']; 
    $casid = $_POST['caid'];  
    $clieid = $_POST['id']; 
    $con = $_POST['cont'];
    $adr = $_POST['add'];  
      
    

    $sql = "INSERT INTO client (CLIENT_ID,CLIENT_NAME,CONTACT_NO,CLIENT_ADDRESS,CASE_ID)
                   VALUES ('$clieid', '$cname', '$con', '$adr',  '$casid')";

     if ($conn->query($sql) === TRUE) {
    echo "New record created successfully"; 
    header("Location:my_client.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  }

?>