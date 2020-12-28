<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap-4.5.3/css/bootstrap.min.css">


<style>
table, th, td {
  padding:10px;
  border: 1px solid white;
    border-collapse: collapse;
    text-align: center;
}

 
 body{
  background-image: url("css/img/search_case.svg");
 }
table{
  border: 1px solid white;
  
  width: 75%;
  margin: auto;
}

 td{
   border: 1px solid white;
  color: white;
  padding: 10px;
}
 th{
  color: black;
  
 }
</style>

</head>
<body>

  <table class='table-resposive mt-5' width='70%'height='35%' border='0'>


  <tr  bgcolor='red'>
                
   <th style="padding: 10px;">Case_id</th>
    <th>Case_type</th> 
    <th>Case_details</th>
    <th>Last_hearing_date</th>
    <th>Next_hearing_date</th>
    <th>Client_ID</th>
    
  </tr>


<?php 
require_once 'conn.php';

if(isset($_POST['submit']))
  {

    $id = $_POST['cid'];  
     
   

$result = mysqli_query($conn, "SELECT * FROM case_ WHERE CASE_ID='".$id."'");

while($res = mysqli_fetch_array($result)) {     
    echo "<tr >";
    echo "<td >".$res['CASE_ID']."</td>";
    echo "<td >".$res['CASE_TYPE']."</td>";
    echo "<td >".$res['CASE_DETAILS']."</td>";
    echo "<td >".$res['LAST_HEARING_DATE']."</td>";  
    echo "<td>".$res['NEXT_HEARING_DATE']."</td>";
    echo "<td>".$res['CLIENT_ID']."</td>";
  
  }
}


  ?>
  </table>


<div class=container>
  <form action="cli_home.php">
  <div class='form-row justify-content-sm-center mt-3'>
    <input class='btn btn-primary' type="submit" value="BACK">
</div>
  <!-- <div class='justify-content-md-center form-row'>
    <input class='col-md-3' type="submit" value="BACK" />
  </div> -->
</form>
</div>
</div>
</body>
</html>