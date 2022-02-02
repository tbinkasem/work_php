<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "phppro";

    $conn = mysqli_connect($server,$user,$pass,$db);

    if(!$conn){
        echo "Not Connect DB";
    }

?>