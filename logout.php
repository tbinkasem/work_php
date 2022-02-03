<?php

    session_start();
    session_destroy();
    echo "<h3 style='color: green;'>กรุณารอสักครู่ ระบบจะกลับไปหน้าแรก</h3>";
    header("refresh:3;url=index.html");

?>