<?php
    // DEBUG
    // ini_set('display_errors', 1);

    session_start();
    
    // 
    // CONNECTION
    // 
    $connection = mysqli_connect("localhost","root","1212312121");
    mysqli_select_db($connection, "LearnSomething");

    echo $_POST['id'];
    
    // $strSQL = "SELECT * FROM purchased WHERE email = '".mysqli_real_escape_string($connection, $_POST['inputEmail'])."' 
	// and password = '".mysqli_real_escape_string($connection, md5($_POST['inputPassword']))."'";
    
    // echo $strSQL;

    // $objQuery = mysqli_query($connection, $strSQL);
	// $objResult = mysqli_fetch_array($objQuery, MYSQLI_BOTH);
	// if(!$objResult)
	// {
	// 		echo "Username and Password Incorrect!";
	// }
	// else
	// {
	// 		$_SESSION["first_name"] = $objResult["first_name"];
    //         $_SESSION["last_name"] = $objResult["last_name"];
    //         $_SESSION["email"] = $objResult["email"];
    //         $_SESSION["password"] = $objResult["password"];

	// 		session_write_close();
			
	// 		header("location:index.php");
	// }
	// mysqli_close($connection);
?>
