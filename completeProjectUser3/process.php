<?php
   	session_start(); 

       $formdata = array(
        'fname'=> $_POST["fname"],
        'lname'=> $_POST["lname"],
        'username'=> $_POST["username"],
        'age'=> $_POST["age"],
        'mobile'=>$_POST["mobile"],
        'email'=> $_POST["email"],
        'password'=> $_POST["password"]
     );
     $existingdata = file_get_contents('mydata.json');
     $tempJSONdata = json_decode($existingdata);
     $tempJSONdata[] =$formdata;
     
     $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
     
    
     if(file_put_contents("mydata.json", $jsondata)) {

      echo " data saved successfully  ";

      echo " <a href="login.php"> Please login </a> ";
         
        
         
      }
     else 
          echo "no data saved";

         if (isset($_POST['username']) && isset($_POST['password']))
          {
            header("Location: view/login.php");
          }
          else{
            header("Location: registration.php");
          }
   
    
    
?>
 