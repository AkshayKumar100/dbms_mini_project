<?php
session_start();
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
<HTML>
<HEAD>
  <title>Add client</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <style>
  body{
  background-color:grey;

 }
 label{color:black;font-weight:bold;}
 h3{color:black;}
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
         <input class='btn btn-primary' type="submit" onclick="location.href='mclient.php'" name="submit">
         <input class="btn btn-primary" type="submit" value="BACK" name="back">

      </form>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>

</BODY>
</HTML>



<?php
  require "conn.php";
if(isset($_POST['back'])){
  header('Location:my_client.php');
}

  if(isset($_POST['submit']))
  {
    if(!empty($_POST['nam'])&&!empty($_POST['caid'])&&!empty($_POST['id'])&&!empty($_POST['cont'])&&!empty($_POST['add']))
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
}
}  else {
    $_SESSION['msg']= "All fields are required ";
    header('location:add_client.php');
}
  }

?>