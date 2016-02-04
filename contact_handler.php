<?php
	session_start();
	include("functions.php");
 	$date = date("l F S, Y");
	if (!empty($_POST['email'])) {		# code...
		$date = date("l F S, Y");
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$fname = mysqli_real_escape_string($con, $fname);
		$lname = mysqli_real_escape_string($con, $lname);
		$email = mysqli_real_escape_string($con, $email);
		$message = mysqli_real_escape_string($con, $message);
		$date = mysqli_real_escape_string($con, $date);
 		$save = mysqli_query($con, "INSERT INTO contacts(
			fname, lname, email, message, cdate) VALUES('$fname',
			'$lname','$email', '$message', '$date')");
 	}
 	header("location:contact.php");
?>