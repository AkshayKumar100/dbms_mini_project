<!DOCTYPE html>
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

  <tr bgcolor='yellow'>
                
   <th>Pay_id</th>
    <th>Case_id</th> 
    <th>Client_id</th>
    <th>Date_of_pay</th>
    <th>Amount Paid</th>
    
  </tr>


<?php 
 require 'conn.php';

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
  <div class="fluid-container">
    <div class='row justify-content-md-center'>
      <div class='col-md-1 '>
        <form action="pay.php">
            <input class="btn btn-primary" type="submit" value="ADD PAYMENT" />
        </form>
      </div>

      <div class='col-md-1 ml-5'>
        <form action="update_pay.php">
            <input class="btn btn-primary" type="submit" value="UPDATE" href="up1.php">
        </form>
      </div>

      <div class='col-md-1'>
        <form action="adv_home.php">
            <input class="btn btn-primary" type="submit" value="BACK" />
        </form>
      </div>

</body>
</html>





