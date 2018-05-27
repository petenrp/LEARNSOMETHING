<?php
    session_start();
    
    $connection = mysqli_connect("sleepy.hackathon.ilab.sit.kmutt.ac.th","root","1212312121");
    mysqli_select_db($connection, "LearnSomething");
    
    $strSQL = "SELECT * FROM users WHERE email = '".mysqli_real_escape_string($connection, $_POST['inputEmail'])."' 
	and password = '".mysqli_real_escape_string($connection, $_POST['inputPassword'])."'";
    
    $objQuery = mysqli_query($connection, $strSQL);
	$objResult = mysqli_fetch_array($objQuery, MYSQLI_BOTH);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			header("location:user_page.php");
	}
	mysqli_close($connection);
?>
