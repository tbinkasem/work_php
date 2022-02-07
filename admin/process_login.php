<?php

    session_start();
	date_default_timezone_set("Asia/Bangkok");
    include "conf.php";
	
	$strSQL = "SELECT * FROM manage WHERE username = '".mysqli_real_escape_string($conn,$_POST['txtUsername'])."' 
	and password = '".mysqli_real_escape_string($conn,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
		echo "Username หรือ Password ไม่ถูกต้อง";
        echo "<meta http-equiv='refresh' content='5 URL=index.html'>";
	}
	else
	{
        $_SESSION['fullname'] = $objResult["fullname"];
		$user = $objResult["username"];
	
		$dt = date("d/m/Y - H:i:s");
		
		$strSQL1 = "INSERT INTO timeline (username,last_login) VALUES('$user','$dt')";
		$objQuery1 = mysqli_query($conn,$strSQL1);

		$_SESSION['login'] = $dt;

		header("location:admin_page.php");
	}
	mysqli_close($conn);

?>