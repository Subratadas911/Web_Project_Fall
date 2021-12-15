<?php

include "connections.php";


$fname="";
$dob="";
$nid="";
$cmp="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{

$fname=$_REQUEST["fname"];
$dob=$_REQUEST["dob"];
$nid=$_REQUEST["nid"];
$cmp=$_REQUEST["cmp"];


if(empty($fname) || empty($nid) || empty($dob) || empty($cmp) )
{
    echo  "You have to  Fill all the requirements";

}
else
{
$query= "INSERT INTO `policeval`(`name`, `address`, `contact`, `complaints`) VALUES ('$fname', '$dob', '$nid', '$cmp')";

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