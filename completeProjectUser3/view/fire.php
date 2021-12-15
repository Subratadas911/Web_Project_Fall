
<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/temp.js"></script>

<head>
    <link rel="stylesheet" type="text/css" href="../Css/service.css">
    
    
    
    

</head>
<body>

<h2>Welcome to Fire dispatcher service</h2>


<br>
<div>
<h3> <a href="pageone.php">Back</a></h3>
</div>
</body>

<p>This is a user page</p>
<br>
<p>Thanks for supporting us</p>
<br>
<p>For more info contact system admin</p>
<br>
<button   id="yes"> Hide Instructions</button>
<button   id="no">Show Instructions</button>

<form action="" method="post">

<div>
   Search for our services <input type="text" name="pname"  >
  
    <input name="fub" type="submit" value="Search">
    <input name="rub" type="button" value="Click" placeholder="To see all availables">

</div>

</form>
</html>
<?php
include('../control/fsearch.php');

?>