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
 td{color: white;}
</style>


</style>
</head>
<body>
  <table width='50%'height='15%' border='0'>

  <tr bgcolor='yellow'>
                
   <th>Pay_id</th>
    <th>Case_id</th> 
    <th>Client_id</th>
    <th>Date_of_pay</th>
    <th>Amount Paid</th>
    
  </tr>


<?php 
   $servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecourts";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

  $result = mysqli_query($conn, "SELECT * FROM payment ORDER BY PAYMENT_ID DESC");  
  while($res = mysqli_fetch_array($result)) {     
    echo "<tr>";
    echo "<td>".$res['PAYMENT_ID']."</td>";
    echo "<td bgcolor=''>".$res['CASE_ID']."</td>";
    echo "<td>".$res['CLIENT_ID']."</td>";
    echo "<td>".$res['DATE_OF_PAYMENT']."</td>";  
    echo "<td>".$res['Amount']."</td>";
  
  }
  ?>
  </table>
  <br>
<form action="pay.php">
    <input type="submit" value="ADD PAYMENT" />
</form><br>
<form action="up1.php">
    <input type="submit" value="UPDATE" href="up1.php">
</form><br> 
<form action="homea.html">
    <input type="submit" value="BACK" />
</form><br>

</body>
</html>





