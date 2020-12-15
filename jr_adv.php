<html>
<head>  
 <style>
 body{
  background-image: url("lawyer.jpeg");

 }
 td{color: white;}
</style>
</head>

<body>


  <table width='50%'height='15%' border='0'>

  <tr bgcolor='yellow'>
                
   <th>JR_NAME</th>
    <th>JR_TYPE</th> 
    <th>JR_CONTACT</th>
    <th>JR_EXPERIENCE</th>
  
    
  </tr>
  
  <?php 
   $servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecourts";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
  echo"connect";
}
  $result = mysqli_query($conn, "SELECT * FROM junior_adv ORDER BY Jr_name DESC");  
  while($res = mysqli_fetch_array($result)) {     
    echo "<tr>";
    echo "<td>".$res['Jr_name']."</td>";
    echo "<td bgcolor=''>".$res['Jr_type']."</td>";
    echo "<td>".$res['Jr_contact']."</td>";  
    echo "<td>".$res['Jr_experience']."</td>";
  
  }
  ?>
  </table>
  <br>
  <br>
  <form action="regjr.php">
    <input type="submit" value="Add JR" />
  </form><br>
  <form action="homea.html">
    <input type="submit" value="BACK" />
</form><br>
  
</body>
</html>
