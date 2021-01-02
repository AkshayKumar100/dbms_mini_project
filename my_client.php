<!-- //todo:: table size -->

<html>
<head>  
 <link rel="stylesheet" href="bootstrap-4.5.3/css/bootstrap.min.css">
 <style>
 body{
   margin: 0;
 background-color:gray;

 }
 table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
 table{
  border: 1px solid white;
  
  width: 75%;
  margin: auto;
}

 td{
   border: 1px solid white;
  color: white;
  padding: 10px 10px;
}
 th{
  color: black;
  padding:10px;
  
 }
</style>
</head>

<body>


 <table class='table-resposive mt-5' width='70%' border='0'>
  <tr bgcolor='red'>
                
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
  <div class="fluid-container">
    <div class='row justify-content-md-center'>
      <div class='col-md-1'>
        <form action="add_client.php">
          <input class="btn btn-primary"type="submit" value="ADD CLIENT" />
        </form>
      </div>
      <div class='col-md-1'>
        <form action="adv_home.php">
          <input class="btn btn-primary"type="submit" value="BACK" />
        </form>
      </div>
    </div>
  </div>
</body>
</html>
