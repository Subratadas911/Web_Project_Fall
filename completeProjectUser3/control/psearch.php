<?php
include('../model/db.php');


 $error="";
// store session data


if (isset($_POST['sub'])) {
$pname=$_POST['pname'];


$connection = new db();
$conobj=$connection->OpenCon();


$userQuery=$connection->ShowAll($conobj,"police");

if ($userQuery->num_rows > 0) {
    echo "<table><tr><th>Police Station</th><th> Contact No. Type</th><th>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {

      echo "<tr><td>".$row["Police_Station"]."</td><td>".$row["Contact_No"]."</td><td>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }




$connection->CloseCon($conobj);



}

?>
