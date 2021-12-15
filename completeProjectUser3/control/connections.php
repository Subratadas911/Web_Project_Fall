<?php


    function insert($query)
    {
        $conn = mysqli_connect('localhost','root','','mydb');
        $result = mysqli_query($conn, $query);
        return $result;
    }
    



?>