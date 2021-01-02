<?php
session_start();
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
<HTML>
<HEAD>
  <title>Add jumior</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <style>
  body{
  background-color:grey;

 }
 label{color:black;}
 h3{color:black;}
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
  
require'conn.php';
if(isset($_POST['back'])){
  header('Location:jr_adv.php');
}

  if(isset($_POST['submit']))
  {
    if(!empty($_POST['name'])&&!empty($_POST['no'])&&!empty($_POST['type'])&&!empty($_POST['expr']))
    {
    $jname = $_POST['name'];  
    $cno = $_POST['no']; 
    $typ = $_POST['type'];
    $exp = $_POST['expr'];  
      
    

    $sql = "INSERT INTO junior_adv (Jr_name,Jr_type,Jr_contact,Jr_experience)
                   VALUES ('$jname', '$typ', '$cno', '$exp')";

     if ($conn->query($sql) === TRUE) {
    echo "New record created successfully"; 
    header("Location:jr_adv.php");
} 
}else {
    $_SESSION['msg']= "All fields are required ";
    header('location:add_jr.php');
}
  }

?>