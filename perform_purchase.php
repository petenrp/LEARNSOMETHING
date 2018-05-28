<?php
	// DEBUG
    ini_set('display_errors', 1);
	session_start();
	
	// if ($_SERVER["REQUEST_METHOD"] != "POST") {
	// 	header("location:login.php");
	// }

	$user_id = $_GET['user_id'];
	$course_id = $_GET['course_id'];
	
	echo $course_id;
	echo "\n";
	echo $user_id;

	$connection = mysqli_connect("localhost","root","1212312121");
    mysqli_select_db($connection, "LearnSomething");

	$strSQL = "INSERT INTO purchase (user_id, course_id) VALUES ('$user_id', '$course_id')";
	
	$objQuery = mysqli_query($connection, $strSQL);
	//$objResult = mysqli_fetch_array($objQuery, MYSQLI_BOTH);
	
	// if(!$objQuery)
	// {
	// 	echo "ERROR";
	// 	header("location:view_course.php");
	// }
	// else
	// {

	// 	session_write_close();
			
	// 	header("location:index.php");
	// }
	header("location:view_course.php?id=$course_id");

	mysqli_close($connection);
?>
