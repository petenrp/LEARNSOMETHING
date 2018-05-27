<?php
    // DEBUG
    // ini_set('display_errors', 1);

    session_start();
    
    // 
    // CONNECTION
    // 
    $connection = mysqli_connect("localhost","root","1212312121");
    mysqli_select_db($connection, "LearnSomething");

    // echo $_GET['id'];
    
    $course_id = $_GET['id'];
    $user_id = $_SESSION['email'];

    // echo "course_id = $course_id\n";
    // echo "user_id = $user_id";

    $strSQL = "SELECT * FROM purchased WHERE course_id = '$course_id' and user_id = '$user_id'";
    
    echo $strSQL;

    $objQuery = mysqli_query($connection, $strSQL);
    $objResult = mysqli_fetch_array($objQuery, MYSQLI_BOTH);
    
	if(!$objResult)
	{
			echo "Not purchased";
	}
	else
	{
            echo "Not purchased :)";
			// $_SESSION["first_name"] = $objResult["first_name"];
            // $_SESSION["last_name"] = $objResult["last_name"];
            // $_SESSION["email"] = $objResult["email"];
            // $_SESSION["password"] = $objResult["password"];

			// session_write_close();
			
			// header("location:purchased.php");
	}
	mysqli_close($connection);
?>
