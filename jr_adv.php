<html>
<head>  
 <style>
 body{
  background-image: url("css/img/lawyer.jpeg");

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
  require 'conn.php';
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
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
  <form action="add_jr.php">
    <input type="submit" value="Add JR" />
  </form><br>
  <form action="adv_home.php">
    <input type="submit" value="BACK" />
</form><br>
  
</body>
</html>
