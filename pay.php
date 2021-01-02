<?php
session_start();
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
<HTML>
<HEAD>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <style>
 body{
  background-color:grey;

 }
 h3{color:black;}
 label{color: black;}
</style>
</HEAD>
<BODY>
<h3 style="text-align: center;"><u>Payment Form</u></h3>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <form action="pay.php" method="post">
        <div class="form-data">
          <label>Payment Id</label>
          <input type="text" name="id" class="form-control">
        </div>
        <div class="form-data">
          <label>Case ID</label>
          <input type="text" name="caid" class="form-control">
        </div>
        <div class="form-data">
          <label>Client id</label>
          <input type="text" name="clid" class="form-control">
        </div>
        <div class="form-data">
          <label>Date</label>
          <input type="date" name="dat" class="form-control">
        </div>
         <div class="form-data">
          <label>Amount</label>
          <input type="number" name="amt" class="form-control">
        </div>
       <br>
         <input class="btn btn-primary" type="submit" name="submit">
         <input class="btn btn-primary" type="submit" value="BACK" name="back">
      </form>
    </div>
    <div class="col-md-4"></div>
  </div>
</div>
</BODY>
</HTML>



<?php
  
require 'conn.php';
if(isset($_POST['back'])){
  header('Location:fee.php');
}

  if(isset($_POST['submit']))
  {
     if(!empty($_POST['id'])&&!empty($_POST['caid'])&&!empty($_POST['clid'])&&!empty($_POST['dat'])&&!empty($_POST['amt']))
    {
    $pid = $_POST['id']; 
    $casid = $_POST['caid'];  
    $clieid = $_POST['clid']; 
    $dt = $_POST['dat']; 
    $at = $_POST['amt'];  
    

    $sql = "INSERT INTO payment (PAYMENT_ID,CASE_ID,DATE_OF_PAYMENT,CLIENT_ID,Amount)
                   VALUES ('$pid', '$casid', '$dt', '$clieid', '$at')";

     if ($conn->query($sql) === TRUE) {
    echo "New record created successfully"; 
    header("Location:pay.php");
}
} else {
    $_SESSION['msg']= "All fields are required ";
    header('location:pay.php');
}
  }

?>