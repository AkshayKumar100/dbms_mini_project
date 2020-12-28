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


  <table width='50%'height='10%' border='0'>

  <tr bgcolor='dodgerblue'>
                
   <th>Client_id</th>
    <th>Client_Name</th> 
    <th>Contact_no</th>
    <th>Client_address</th>
    <th>Case_ID</th>
    <th>Remove</th>
    
    
  </tr>
  <?php 
  require 'conn.php';

  $result = mysqli_query($conn, "SELECT * FROM client ORDER BY CLIENT_ID DESC");  
  while($res = mysqli_fetch_array($result)) {     
    echo "<tr>";
                echo "<td>".$res['CLIENT_ID']."</td>";
    echo "<td bgcolor=''>".$res['CLIENT_NAME']."</td>";
    echo "<td>".$res['CONTACT_NO']."</td>";
    echo "<td>".$res['CLIENT_ADDRESS']."</td>";  
    echo "<td>".$res['CASE_ID']."</td>";
    echo"<td bgcolor=''> <a href=\"delete.php?CLIENT_ID=$res[CLIENT_ID]\" onClick=\"return confirm('Are you sure you want to delete?')\"><font color='white'>Delete</a></td>";
    }
  ?>
  </table>
  <br>
  <form action="add_client.php">
    <input type="submit" value="ADD CLIENT" />
  </form><br>
  <form action="adv_home.php">
    <input type="submit" value="BACK" />
</form><br>
</body>
</html>
