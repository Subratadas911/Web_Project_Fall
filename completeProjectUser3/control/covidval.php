<?php

include "connections.php";


$fname="";
$dob="";
$nid="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{

$fname=$_REQUEST["fname"];
$dob=$_REQUEST["dob"];
$nid=$_REQUEST["nid"];


if(empty($fname) || empty($nid) || empty($dob) )
{
    echo  "You have to  Fill all the requirements";

}
else
{
$query= "INSERT INTO `covidvac`(`name`, `DOB`, `nid`) VALUES ('$fname', '$dob', '$nid')";

$row = insert($query);
if($row == 1)
{
   
   echo "done";
   header("Location: ../view/success.php");
}
else{
echo "Failed!";
}

}
}


?>