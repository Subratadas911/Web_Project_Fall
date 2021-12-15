<?php include "../control/passval.php"; ?>
<!DOCTYPE html>
<html>
<body>



<form action=""  method="post" >


<h2>Bangladesh e-Passport service Request Form </h2><br>  


First Name :
<td><input  type="text"  id="fname" name="fname"  placeholder="Enter your full name" > <br></td>

Last Name :
<td><input  type="text"  id="lname" name="lname"  placeholder="Enter your full name" > <br></td>
  
DOB:
    <td><input type="text"  id="dob" name="dob" placeholder="give your address" >  <br></td>

    Please select your gender:
	    <input type="radio" id="jp" name="gender" value="Male">
	          <label for="jp">Male</label>
	    <input type="radio" id="sp" name="gender" value="Female">
	          <label for="sp">Female</label>
	    <input type="radio" id="pl" name="gender" value="Other">
	          <label for="pl">Other</label>
	          <br>

    Contact No.:
    <td><input type="number"  id="mobile" name="mobile" placeholder="01*********" >  <br></td>

    NID:
    <td><input type="text"  id="nid" name="nid" placeholder="......." >  <br></td>


    <input type="reset" value="Reset" id="reset">
  <input type="submit" value="Submit" id="submit">

</form>
  

</form>
<br>
<h3> <a href="pageone.php">Back</a></h3>

</body>
</html>
