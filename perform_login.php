<?php
    // DEBUG
    // ini_set('display_errors', 1);

    session_start();

    // // 
    // // TEST
    // // 
    // if(!isset($_POST['send'])) { 
    //     echo " No valid Post :(";
    // } 
    // else {
    //     if (isset($_POST['achternaam'])) {
    //         $anaam = $_POST['achternaam'];
    //         // do whatever here
    //     }
        
    //     if(isset($_POST['voornaam'])) {
    //         $vnaam =  $_POST['voornaam'];
    //     }
    //     // $anaam = mysql_real_escape_string($anaam);
    //     // $vnaam = mysql_real_escape_string($vnaam);
    // }
    
    // 
    // CONNECTION
    // 
    $connection = mysqli_connect("localhost","root","1212312121");
    mysqli_select_db($connection, "LearnSomething");
    
    $strSQL = "SELECT * FROM users WHERE email = '".mysqli_real_escape_string($connection, $_POST['inputEmail'])."' 
	and password = '".mysqli_real_escape_string($connection, $_POST['inputPassword'])."'";
    
    echo $strSQL;

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
