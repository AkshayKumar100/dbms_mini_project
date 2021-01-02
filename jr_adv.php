<html>
<head>  
  <link rel="stylesheet" href="bootstrap-4.5.3/css/bootstrap.min.css">
 <style>
 table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
body{
  background-color:grey;
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
  padding:10px;
  
 }
 
</style>
</head>

<body>


 <table class='table-resposive mt-5' width='70%' border='0'>
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
  <div class="fluid-container">
    <div class='row justify-content-md-center'>
      <div class='col-md-1'>
        <form action="add_jr.php">
          <input class="btn btn-primary" type="submit" value="Add JR" />
        </form>
      </div>
      <div class='col-md-1'>
        <form action="adv_home.php">
          <input class="btn btn-primary" type="submit" value="BACK" />
        </form>
      </div>
    </div>
  </div>
  
</body>
</html>
