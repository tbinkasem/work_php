<?php

    $server = "localhost";
    // $server = "sql211.epizy.com";
    $user = "root";
    // $user = "epiz_25241252";
    $pass = "";
    // $pass = "4bHGa96mN5";
    $db = "phpwork";
    // $db = "epiz_25241252_phpwork";

    $conn = mysqli_connect($server,$user,$pass,$db);
    mysqli_set_charset($conn, "utf8");
    date_default_timezone_set("Asia/Bangkok");

    if(!$conn){
        echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้";
    }

?>