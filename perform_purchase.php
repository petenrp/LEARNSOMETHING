<?php
	session_start();
	
	// if ($_SERVER["REQUEST_METHOD"] != "POST") {
	// 	header("location:login.php");
	// }

	$user_id = $GET['user_id'];
	$course_id = $GET['course_id'];
    
    // $password = mysqli_real_escape_string($connection, $_POST['inputPassword']);
    $password = md5($_POST['inputPassword']);

	// if ($first_name == null || $last_name == null || $email == null || $password == null) {
	// 	// header("location:register.php");
	// }
	// else {
	// 	echo "NOPE NONE OF THAT IS NULL";
	// }

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
