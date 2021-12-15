<?php
include('../model/db.php');


 $error="";
// store session data


if (isset($_POST['fub'])) {
$pname=$_POST['pname'];


$connection = new db();
$conobj=$connection->OpenCon();


$userQuery=$connection->searchamb($conobj,"ambulance",$pname);

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Ambulance Services</th><th> Contact No.</th><th>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {

      echo "<tr><td>".$row["Ambulance_Service_Name"]."</td><td>".$row["Contact_No"]."</td><td>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
}
 
  



?>
 