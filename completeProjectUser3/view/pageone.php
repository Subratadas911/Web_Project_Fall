<?php
session_start(); 
if(empty($_SESSION["username"])) 
{
header("Location: login.php"); 
}

?>


<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/temp.js"></script>
<head>
    <link rel="stylesheet" type="text/css" href="../Css/pageone.css">
    
    
    
    

</head>

<head>

</head>


<body>

<h3 id="mypro"> <a href="myprofile.php">My Profile</a></h3>
Hii, <h3> <?php echo $_SESSION["username"];?></h3>
<div>
<h1 class="welcome" >Welcome to the list of Services provided by Government</h1>

<p>

<a href="police.php"> Police Dispatcher </a><br>
<a href="fire.php"> Fire Dispatcher </a><br>
<a href="ambulance.php"> Ambulance </a><br>
<a href="tow.php"> Tow Truck </a><br>
<a href="more.php"> More </a><br>
</div>


  
  
</form>
<br>


</p>

<p>This is a user page</p>
<br>
<p>Thanks for supporting us</p>
<br>
<p>Our goal is to provide you all of the possible emergency dispatcher contact and connection on your device .</p>
<br>

<button   id="yes"> Hide Instructions</button>
<button   id="no">Show Instructions</button>
<br>
<form action="" method="post">
Search for our services <input type="text" name="pname"  >
  
  <input name="submit" type="submit" value="Search">
  <div class="log">
<h3> <a href="../control/logout.php">Logout</a></h3>
</div>
<br>



</body>

</html>
<?php
include('../control/SearchControl.php');

?>
<?php echo $error; ?>


