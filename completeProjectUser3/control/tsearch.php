<?php
include('../model/db.php');


 $error="";
// store session data


if (isset($_POST['fub'])) {
$pname=$_POST['pname'];


$connection = new db();
$conobj=$connection->OpenCon();


$userQuery=$connection->searchtow($conobj,"tow_truck",$pname);

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Tow Truck Services</th><th> Contact No. Type</th><th>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {

      echo "<tr><td>".$row["Tow_Truck_Services"]."</td><td>".$row["Contact_No"]."</td><td>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
}
 
  



?>
 