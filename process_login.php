<?php

    session_start();
    include "config.php";
	
	$strSQL = "SELECT * FROM student WHERE username = '".mysqli_real_escape_string($conn,$_POST['txtUsername'])."' 
	and password = '".mysqli_real_escape_string($conn,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
            echo "<meta http-equiv='refresh' content='5 URL=index.html'>";
	}
	else
	{
			$_SESSION["ids"] = $objResult["ids"];
			$_SESSION["status"] = $objResult["status"];

			session_write_close();
			
			if($objResult["status"] == "ADMIN")
			{
				header("location:admin_page.php");
			}
			else
			{
				header("location:user_page.php");
			}
	}
	mysqli_close($conn);

?>