<?php
	session_start();
	include("functions.php");
 	
	if (!empty($_POST['email'])) {		# code...
		$date = date("l F S, Y");
		$email = $_POST['email'];
		$name = $_POST['name'];
		$name = mysqli_real_escape_string($con, $name);
		$email = mysqli_real_escape_string($con, $email);
		$date = mysqli_real_escape_string($con, $date);
 		$save = mysqli_query($con, "INSERT INTO subscribe(
			name, email, cdate) VALUES('$name', '$email', '$date')");
 	}
 	header("location:devotion.php");
?>