<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 function CheckUser($conn,$table,$username,$password)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."' AND Password='". $password."'");
 return $result;
 }


 function UpdateUser($conn,$table,$username,$fname,$lname,$email,$age,$mobile,$password)
 {
     $sql = "UPDATE $table SET FirstName='$fname', LastName='$lname', Age='$age', Mobile='$mobile', Email='$email', Password ='$password' WHERE username='$username'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

 function search($conn,$table,$pname)
 {
    $result = $conn->query("SELECT * FROM  $table  WHERE Service_Nam = ' $pname' OR Service_Type = '$pname' " );
    return $result;
 }
 function searchpolice($conn,$table,$pname)
 {
    $result = $conn->query("SELECT * FROM $table WHERE Police_Station='$pname' OR Contact_No='$pname'");
    return $result;
 }
 function searchfire($conn,$table,$pname)
 {
    $result = $conn->query("SELECT * FROM $table WHERE Fire_Station='$pname' OR Contact_No='$pname'");
    return $result;
 }

 function searchtow($conn,$table,$pname)
 {
    $result = $conn->query("SELECT * FROM $table WHERE Tow_Truck_Services='$pname' OR Contact_No='$pname'");
    return $result;
 }


 function searchamb($conn,$table,$pname)
 {
    $result = $conn->query("SELECT * FROM $table WHERE Ambulance_Service_Name='$pname' OR Contact_No='$pname'");
    return $result;
 }
 

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }


 function unique($conn,$table,$username)
 {
     $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username."'");
  return $result;
 
 }




function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>