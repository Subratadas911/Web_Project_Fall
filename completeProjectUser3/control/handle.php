<?php
// include("db.php");
include('../model/db.php');

if(empty($_REQUEST["username"]))
{
    echo "Please enter your username";
}
else
{
    $connection = new db();
    $conobj=$connection->OpenCon();
    $userQuery=$connection->unique($conobj,"user",$_REQUEST["username"]);

    if ($userQuery->num_rows > 0)
    {                                                                                        
        echo "username exists";
    }
    else
    {
        echo "username is unique";
    }

    $connection->CloseCon($conobj);

}






?>