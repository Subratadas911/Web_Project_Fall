<?php
include('../model/db.php');


 $error="";

if (isset($_POST['submit'])) {


$pname=$_POST['pname'];


$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAll($conobj,"services",$pname);

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Service Name</th><th> Service Type</th><th>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {

      echo "<tr><td>".$row["Service_Nam"]."</td><td>".$row["Service_Type"]."</td><td>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }




$connection->CloseCon($conobj);

}



?>
