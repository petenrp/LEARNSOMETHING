<?php
	session_start();
	
	if ($_SERVER["REQUEST_METHOD"] != "POST") {
		header("location:register.php");
	}

	$first_name = $_POST['inputFirstname'];
    $last_name = $_POST['inputLastname'];
    $email = $_POST['inputEmail'];
    // $password = mysqli_real_escape_string($connection, $_POST['inputPassword']);
    $password = md5($_POST['inputPassword']);

	echo $first_name;
	echo $last_name;
	echo $email;
	echo $password;

	// if ($first_name == null || $last_name == null || $email == null || $password == null) {
	// 	// header("location:register.php");
	// }
	// else {
	// 	echo "NOPE NONE OF THAT IS NULL";
	// }

	$connection = mysqli_connect("localhost","root","1212312121");
    mysqli_select_db($connection, "LearnSomething");

    $first_name = mysqli_real_escape_string($connection, $first_name);
    $last_name = mysqli_real_escape_string($connection, $last_name);
    $email = mysqli_real_escape_string($connection, $email);
    // $password = mysqli_real_escape_string($connection, $_POST['inputPassword']);
    $password = mysqli_real_escape_string($connection, $password);

	$strSQL = "INSERT INTO users (first_name, last_name, email, password)
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
		$_SESSION["first_name"] = $first_name;
		$_SESSION["last_name"] = $last_name;
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;

		session_write_close();
			
		header("location:index.php");
	}
	mysqli_close($connection);
?>
