<?php

include "connections.php";


$fname="";
$lname="";
$dob="";
$gender="";

$mobile="";
$nid="";




if($_SERVER["REQUEST_METHOD"]=="POST")
{

$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$dob=$_REQUEST["dob"];
$gender=$_REQUEST["gender"];
$mobile=$_REQUEST["mobile"];
$nid=$_REQUEST["nid"];


if(empty($fname) || empty($lname) || empty($gender) || empty($dob) || empty($mobile)|| empty($nid) )
{
    echo  "You have to  Fill all the requirements";

}
else
{
$query= "INSERT INTO `passval`(`fname`, `lname`, `dob`, `gender`, `mobile`, `nid`) VALUES ('$fname', '$lname', '$dob', '$gender', '$mobile', '$nid')";

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