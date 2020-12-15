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

</head>
<body>
  <table width='50%'height='15%' border='0'>


  <tr bgcolor='yellow'>
                
   <th>CASE_ID</th>
    <th>CASE_TYPE</th> 
    <th>CASE_DETAILS</th>
    <th>LAST_HEARING_DATE</th>
    <th>NEXT_HEARING_DATE</th>
    <th>CLIENT_ID</th>
    <th>REMOVE</th>
    
  </tr>


<?php 
   $servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecourts";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

  $result = mysqli_query($conn, "SELECT * FROM case_ ORDER BY CASE_ID DESC");  
  while($res = mysqli_fetch_array($result)) {     
    echo "<tr>";
                echo "<td>".$res['CASE_ID']."</td>";
    echo "<td bgcolor=''>".$res['CASE_TYPE']."</td>";
    echo "<td>".$res['CASE_DETAILS']."</td>";
    echo "<td>".$res['LAST_HEARING_DATE']."</td>";  
    echo "<td>".$res['NEXT_HEARING_DATE']."</td>";
    echo "<td>".$res['CLIENT_ID']."</td>";
    echo"<td bgcolor=''> <a href=\"delete1.php?CASE_ID=$res[CASE_ID]\" onClick=\"return confirm('Are you sure you want to delete?')\"><font color='white'>DELETE</a></td>";
  
  }
  ?>
  </table>
  <br>
<form action="addcase.php">
    <input type="submit" value="ADD CASE" />
</form><br>
<form action="up.php">
    <input type="submit" value="UPDATE" href="up.php"><br>
</form><br>
<form action="homea.html">
    <input type="submit" value="BACK" />
</form><br>
<br>

</body>
</html>





