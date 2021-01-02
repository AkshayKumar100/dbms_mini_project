<?php
session_start();
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
<HTML>
<HEAD>
  <title>Add case </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <style>
  body{
  background-color:grey;

 }
 label{color:black;}
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
      <input class='btn btn-primary' type="submit" name="submit">
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
  header('Location:my_case.php');
}

  if(isset($_POST['submit']))
  {
    if(!empty($_POST['cid'])&&!empty($_POST['type'])&&!empty($_POST['details'])&&!empty($_POST['clid'])&&!empty($_POST['lhd'])&&!empty($_POST['nhd']))
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
} }else {
    $_SESSION['msg']= "All fields are required ";
    header('location:add_case.php');
}
  }

?>