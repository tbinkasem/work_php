<?php

    session_start();
    $id = $_SESSION['ids'];

    $target_dir = $id."/";
    $target_file = $target_dir . basename($_FILES["fimage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
        if($_FILES["fimage"]["tmp_name"] != '') {
            $uploadOk = 1;
            if (file_exists($target_file)) {
                echo "<h2 style='color: red'>ขออภัย! ไฟล์ที่คุณส่งมาซ้ำกัน</h2>";
                //$uploadOk = 0;
                echo "<meta http-equiv='refresh' content='3 URL=user_page.php'>";
            }elseif($_FILES["fimage"]["size"] > 500000){
                echo "<h2 style='color: red'>ขออภัย! ไฟล์ที่คุณส่งมาขนาดใหญ่เกิน 5 MB</h2>";
                //$uploadOk = 0;
                echo "<meta http-equiv='refresh' content='3 URL=user_page.php'>";
            }elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"){
                echo "<h2 style='color: red'>ขออภัย! ไฟล์ที่ส่งมาควรจะต้องเป็นนามสกุล JPG, JPEG, PNG & GIF เท่านั้น</h2>";
                //$uploadOk = 0;
                echo "<meta http-equiv='refresh' content='3 URL=user_page.php'>";
            }else{
                if (move_uploaded_file($_FILES["fimage"]["tmp_name"], $target_file)) {
                    echo "<h2 style='color: green'>ได้ทำการส่งไฟล์ ". htmlspecialchars( basename( $_FILES["fimage"]["name"])). " เรียบร้อบแล้ว</h2>";
                    echo "<meta http-equiv='refresh' content='3 URL=user_page.php'>";
                } else {
                    echo "<h2 style='color: red'>ขออภัย! ระบบขัดข้อง ไม่สามารถส่งไฟล์ได้</h2>";
                    echo "<meta http-equiv='refresh' content='3 URL=user_page.php'>";
                }
            }
        }else{
            echo "<h2 style='color: red'>คุณยังไม่ได้เลือกไฟล์ที่จะส่ง</h2>";
            echo "<meta http-equiv='refresh' content='3 URL=user_page.php'>";
            $uploadOk = 0;
        }
    }


?>