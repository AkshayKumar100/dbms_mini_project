<!-- table center -->

<!DOCTYPE html>
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
  <table class='table-resposive mt-5' width='70%'height='35%' border='0'>


  <tr bgcolor='red'>
                
   <th>CASE_ID</th>
    <th>CASE_TYPE</th> 
    <th>CASE_DETAILS</th>
    <th>LAST_HEARING_DATE</th>
    <th>NEXT_HEARING_DATE</th>
    <th>CLIENT_ID</th>
    <th>REMOVE</th>
    
  </tr>


<?php 
require 'conn.php';

  $result = mysqli_query($conn, "CALL `mycases`();");  
  while($res = mysqli_fetch_array($result)) {     
    echo "<tr>";
                echo "<td>".$res['CASE_ID']."</td>";
    echo "<td bgcolor=''>".$res['CASE_TYPE']."</td>";
    echo "<td>".$res['CASE_DETAILS']."</td>";
    echo "<td>".$res['LAST_HEARING_DATE']."</td>";  
    echo "<td>".$res['NEXT_HEARING_DATE']."</td>";
    echo "<td>".$res['CLIENT_ID']."</td>";
    echo"<td bgcolor=''> <a href=\"delete1.php?CASE_ID=$res[CASE_ID]\" onClick=\"return confirm('Are you sure you want to delete?')\"><font color='red'><b>DELETE</b></a></td>";
  }
  ?>
  </table>
  <br>
  <div class="fluid-container">
  <div class='row justify-content-md-center'>
    <div class='col-md-1'>
      <form action="add_case.php">
          <input class="btn btn-primary" type="submit" value="ADD CASE" />
      </form><br>
    </div>
    <div class='col-md-1'>
      <form action="update_date.php">
          <input class="btn btn-primary" type="submit" value="UPDATE" href="up.php"><br>
      </form><br>
    </div>
    <div class='col-md-1'>
      <form action="adv_home.php">
          <input class="btn btn-primary" type="submit" value="BACK" />
      </form><br>
    </div>
    </div>
<br>

</body>
</html>





