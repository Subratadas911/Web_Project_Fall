
 <?php include "control/allproc.php"; ?> 




<!DOCTYPE html>

<html>
    <head>
    <link rel="stylesheet" type="text/css" href="Css/regcss.css"> 
    <script src="js/myJS.js"></script>
    
    
    

</head>

<body>
<p id="mytext"></p>
<h1 id="sticky">National Emergency Services</h1>

<h2>"999"</h2>

<br>

<h1 id="para1">Sign Up</h1>
<p id="pgg">Please fill in this form to create an account.</p>
<hr>
 <form action=""  onsubmit="return validateForm()" method="post" enctype="multipart/form-data"> 

<div class="input">
    <h1 class="center">
First Name :
<td><input  type="text"  id="fname" name="fname"  placeholder="Enter your first name" > <br></td>
</div>	
</h1>

<h1 class="center">
        <p class="input">
	Last Name :
		<input type="text"  id="lname" name="lname"  placeholder="Enter your last name" >  <br>
	    </p>
        </h1>

        <h1 class="center">
        <p class="input">
	User Name :
		<input type="text"  id="username" name="username"  placeholder="Enter your user name" onkeyup="myajaxfunc()">  <br>
        <h2 id="usr"></h2>
	    </p>
        </h1>
        <h1 class="center">
        <p class="input">
	Age :
		<input type="number"  id="age" name="age"  placeholder="Enter your age" > <br>
	    </p>

        </h1>
        <h1 class="center">
	    <p class="input">
	Please select your gender:
	    <input type="radio" id="gender" name="gender" value="Male">
	          <label for="jp">Male</label>
	    <input type="radio" id="gender" name="gender" value="Female">
	          <label for="sp">Female</label>
	    <input type="radio" id="gender" name="gender" value="Other">
	          <label for="pl">Other</label>
	          <br>
	    </p>      
        
        </h1>
        <h1 class="center">
        <p class="input">
	Mobile Number:
    <td><input type="number"  id="mobile" name="mobile" placeholder="01*********" >  <br></td>
	    </p>


        </h1>
        <h1 class="center">
        <p class="input">
	Email :
		<input type="text"  id="email" name="email" placeholder="Enter your E-mail ID"  > <br>
        
		</p>
        </h1>

        <h1 class="center">
        <p class="input">
    Password :
		<input type="text"  id="password" name="password" placeholder="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" > <br>
		</p>
 
        </h1>

        <h1 class="center">
Please give a profile picture(jpeg):  <input type="file" name="filetoupload">

</h1>
<br>
<br>
<h1 class="cen">
<label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    </h1>

    <h1 class="cen">
    <p>By creating an account you agree to our <a href="#" style="color:blue">Terms & Privacy</a>.</p>
    </h1>
    <h1 class="center">
<div class="clearfix">
  <input type="reset" value="Reset" id="reset">
  <input type="submit" value="Sign-up" id="submit">
  <p>Already an user! please login</p>
  <h3 id="log"> <a href="view/login.php">Login</a></h3>
  <h3 id="log"> <a href="decision.php">Back</a></h3>
</div>

</h1>



</form>

</body>
</html>