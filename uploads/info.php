<?php
	session_start();
	include("functions.php");
 	$date = date("l F S, Y");
	if (!empty($_POST['title'])) {		# code...
		$date = date("l F S, Y");
		$title = $_POST['title'];
		$category = $_POST['category'];
		$page = $_POST['page'];
		$description = $_POST['Description'];
		$title = mysqli_real_escape_string($con, $title);
		$category = mysqli_real_escape_string($con, $category);
		$page = mysqli_real_escape_string($con, $page);
		$description = mysqli_real_escape_string($con, $description);
		$date = mysqli_real_escape_string($con, $date);
 		$save = mysqli_query($con, "INSERT INTO information(
			title, Description, category, page) VALUES('$title',
			'$description','$category', '$page')");
 	}
 	header("location:information.php");
?>