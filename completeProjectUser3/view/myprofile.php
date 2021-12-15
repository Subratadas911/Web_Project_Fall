<?php
session_start(); 

include('../control/updatecheck.php');


if(empty($_SESSION["username"])) 
{
header("Location: ../control/login.php"); 
}

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Css/mypro.css">
    
    
    
    

</head>
<body>
     
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>

<div class="pro">
<br>Your Profile Page.
<br><br>

 <?php echo $error; ?>
<form action='' method='post'>
Firstname : <input type='text' name='fname' value="<?php echo $fname; ?>" >
<br><br>
Larstname : <input type='text' name='lname' value="<?php echo $lname; ?>" >
<br><br>
Age : <input type='text' name='age' value="<?php echo $age; ?>" >
<br><br>
Mobile No. : <input type='text' name='mobile' value="<?php echo $mobile; ?>" >
<br><br>
email : <input type='text' name='email' value="<?php echo $email; ?>" > <br><br>
Password : <input type='text' name='password' value="<?php echo $password; ?>" >
<br><br>


 
     <input name='update' type='submit' value='Update'>  

    
<br>
<br>
<a href="pageone.php">Back </a>

<br>
<br>

<a href="../control/logout.php"> logout</a>

</div>

</body>
</html>