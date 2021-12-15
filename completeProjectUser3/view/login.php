<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="../js/loginjq.js"></script>
<head>
<link rel="stylesheet" type="text/css" href="../Css/logincss.css"> 
</head>
<body>

<h2> Registration Done! <br> Sign up first if you are still not registered </h2>

<div clas="num1">
<button   id="yes"> Hide Instructions</button>
<button   id="no">Show Instructions</button>
</div>
</body>
</html>

<?php
include('../control/logincheck.php');

if(isset($_SESSION['username'])){
header("location: pageone.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
    <script src="../js/loginJS.js"></script>
    </head>
<body>
<div class = "allb">
<h3>Please Login</h3>
<p id="login"></p>
<form action="" onsubmit="return validateForm()" method="post">
<div>
    <input type="text" name="username" id="username" placeholder="Enter your username" ><br>
    <input type="password" name="password" id="password" placeholder="Enter your password" ><br>

    <input name="submit" type="submit" value="LOGIN">

    </div>
</form>

<br>
<br>
<div class="num2">
<a href="../home.php"  >Home</a>
</div>
<div class="num3">
<a href="../decision.php">Back</a>
</div>

</br>
<br>
<?php echo $error; ?>

</body>
</html>