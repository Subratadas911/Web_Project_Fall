<?php include "../control/policeval.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../Css/rqpl.css">
    
    
    
    

</head>
<body>

<h2 class="pcvd">Police dispatcher service Request Form </h2><br>
<br>
<br>
<br>


<form action=""  method="post" >
<div>

Full Name :
<td><input  type="text"  id="fname" name="fname"  placeholder="Enter your full name" > <br></td>
  
Address:
    <td><input type="text"  id="dob" name="dob" placeholder="give your address" >  <br></td>

    Contact No.:
    <td><input type="number"  id="nid" name="nid" placeholder="01*********" >  <br></td>

    Complaint about:
    <td><input type="text"  id="cmp" name="cmp" placeholder="......." >  <br></td>


    <input type="reset" value="Reset" id="reset">
  <input type="submit" value="Submit" id="submit">
  <div>
</form>
  

</form>
<br>
<h3 id="bk"> <a href="pageone.php">Back</a></h3>

</body>
</html>
