<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "phpwork";

    $conn = mysqli_connect($server,$user,$pass,$db);

    if(!$conn){
        echo "Not Connect DB";
    }

?>