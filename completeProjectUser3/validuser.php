<?php
<?php include "process.php"; ?>
$file = "mydata.json";

$json_array = json_decode(file_get_contents($file), true);

$users = array();

if(is_array($json_array)) {
    $users = $json_array;
}
if (isset($_POST['username'])) {
    if($users[$name]["username"] !== $username ){
         http_response_code(400);
    }
} 
else {
    $users[] = array("username" => $username, "password" => $password);
    $i = 0;
    

    file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
}
?>