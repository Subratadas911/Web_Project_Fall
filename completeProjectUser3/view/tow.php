<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/temp.js"></script>

<head>
    <link rel="stylesheet" type="text/css" href="../Css/service.css">
    
    
    
    

</head>

<body>

<h2>Welcome to Tow Truck dispatcher service</h2>

<form action="" method="post">
<div>
<h2> Tow truck dispatcher service Request Form</h2>
<br>
<h3> <a href="towreq.php">Send Request</a></h3>
  
   Search for our services <input type="text" name="pname"  >
  
    <input name="fub" type="submit" value="Search">
    <input name="rub" type="button" value="Click" placeholder="To see all availables">
</div>
</form>
  

</form>
<br>
<h3> <a href="pageone.php">Back</a></h3>

</body>
<p>This is a user page</p>
<br>
<p>Thanks for supporting us</p>
<br>
<p>For more info contact system admin</p>
<br>
<button   id="yes"> Hide Instructions</button>
<button   id="no">Show Instructions</button>
</html>
<?php
include('../control/tsearch.php');

?>