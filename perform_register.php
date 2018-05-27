<?php
	session_start();
	
	$connection = mysqli_connect("localhost","root","1212312121");
    mysqli_select_db($connection, "LearnSomething");

	// $strSQL = "SELECT * FROM registration WHERE Username = '".mysqli_real_escape_string($connection, $_POST['txtUsername'])."' 
    // and Password = '".mysqli_real_escape_string($connection, $_POST['txtPassword'])."'";
    $first_name = mysqli_real_escape_string($connection, $_POST['inputFirstName']);
    $last_name = mysqli_real_escape_string($connection, $_POST['inputLastName']);
    $email = mysqli_real_escape_string($connection, $_POST['inputEmail']);
    $password = mysqli_real_escape_string($connection, $_POST['inputPassword']);
    $password = mysqli_real_escape_string($connection, $_POST['inputPassword']);

	$strSQL = "INSERT INTO registration (first_name, last_name, email, password)
	VALUES ('$first_name', '$last_name', '$email', '$password')";
	
	$objQuery = mysqli_query($connection, $strSQL);
	//$objResult = mysqli_fetch_array($objQuery, MYSQLI_BOTH);
	
	if(!$objQuery)
	{
			echo "ERROR";
	}
	else
	{
			echo "REGISTER COMPLETE";
			// $_SESSION["UserID"] = $objResult["UserID"];
			// $_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			header("location:homepage.html");
	}
	mysqli_close($connection);
?>
