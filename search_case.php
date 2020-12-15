<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}

 
 body{
  background-image: url("lawyer.jpeg");

 }
 td{color: black;
 padding: 10px;
}
 th{
  color: black;
  
 }
</style>

</head>
<body>
  <br>
  <table style="margin: 250px; " width='70%'height='35%' border='0'>


  <tr  bgcolor='red'>
                
   <th style="padding: 10px;">Case_id</th>
    <th>Case_type</th> 
    <th>Case_details</th>
    <th>Last_hearing_date</th>
    <th>Next_hearing_date</th>
    <th>Client_ID</th>
    
  </tr>


<?php 
include("homec.php");

   $servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecourts";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

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
  <br>
  <H1><i><u>Thank you!!!!!!!!!</u></i></H1><br><br>
  <form action="prc.php">
    <input type="submit" value="BACK" />
</form><br>
<br>
</body>
</html>
