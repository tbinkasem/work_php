<?php

    // session_start();
    include "config.php";

    $u = mysqli_real_escape_string($conn,$_POST['txtUsername']);
    $p = mysqli_real_escape_string($conn,$_POST['txtPassword']);
    $f = mysqli_real_escape_string($conn,$_POST['txtFullname']);
    $i = mysqli_real_escape_string($conn,$_POST['txtIDS']);
    $d = mysqli_real_escape_string($conn,$_POST['txtDepname']);

	$strSQL = "INSERT INTO student (username,password,fullname,ids,depname,status) VALUES('$u','$p','$f','$i','$d','student')";
	$objQuery = mysqli_query($conn,$strSQL);
	//$objResult = mysqli_fetch_array($objQuery);
	if(!$objQuery)
	{
			echo "<h2 style='color: red;'>ไม่สามารถลงทะเบียนได้</h2>";
            echo "<meta http-equiv='refresh' content='5 URL=index.html'>";
	}else{
        mkdir($i);
        $source = 'master/index.php'; 
        $destination = $i.'/index.php'; 
        if(!copy($source, $destination) ) { 
            echo "ไม่สามารถสร้างไฟล์ได้"; 
        }  
        echo "<h2 style='color: green;'>ลงทะเบียนเรียบร้อยแล้ว</h2>";
        echo "<meta http-equiv='refresh' content='5 URL=index.html'>";
    }
	mysqli_close($conn);

?>