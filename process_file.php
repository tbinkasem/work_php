<?php

    session_start();
    $id = $_SESSION['ids'];

    if(isset($_FILES['fphp'])){
        
        $file_name = $_FILES['fphp']['name'];
        $file_size = $_FILES['fphp']['size'];
        $file_tmp = $_FILES['fphp']['tmp_name'];
        $file_type = $_FILES['fphp']['type'];
        $file_ext = pathinfo($_FILES['fphp']['name'], PATHINFO_EXTENSION);
        // strtolower(end(explode('.',$_FILES['fphp']['name'])));
        $extensions = "php";
        $errors = $file_ext == $extensions;
        
        if($file_ext != $extensions){
            echo "<h2 style='color: red'> ไฟล์ที่ส่งมาไม่ใช่นามสกุล php </h2>";
            echo "<meta http-equiv='refresh' content='3 URL=user_page.php'>";
        }
        
        if($file_size > 5242880){
            echo "<h2 style='color: red'> ไฟล์ที่ส่งมาขนาดใหญ่กว่า 5 MB </h2>";
            echo "<meta http-equiv='refresh' content='3 URL=user_page.php'>";
        }
        
        if($errors == '1'){
            move_uploaded_file($file_tmp,$id."/".$file_name);
            echo "<h2 style='color: green;'> ส่งไฟล์เรียบร้อยแล้ว </h2>";
            echo "<meta http-equiv='refresh' content='3 URL=user_page.php'>";
        }else{
            echo "<h2 style='color: red;'> ไม่สามารถส่งไฟล์ได้ </h2>";
            echo "<meta http-equiv='refresh' content='3 URL=user_page.php'>";
        }
    }
?>