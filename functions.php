 <!-- <?php //include "header.php";?> -->
<?php
	$key = "@12345boch";
	$real_user_key = hash("ripemd128", $key);
	$date_TRACK = date("l/F/jS/Y");
	 $con = mysqli_connect("localhost","root","");
	 $db = mysqli_query($con, "CREATE DATABASE epiz_17213666_boch");
	 $con = mysqli_connect("localhost","root","","boch");
	 //$con = mysqli_connect("eu-cdbr-azure-north-d.cloudapp.net","beca831686c272","d3e17c90","mydbappAuTMl0gky");

	$sql = mysqli_query($con,"CREATE TABLE media(ID int(11) not null auto_increment,
	primary key(ID), Description text(2000),
	media_name text(10000), category text(100), page text(100), time_upload text(50))");

	$info = mysqli_query($con,"CREATE TABLE information(ID int(11) not null auto_increment,
	primary key(ID), title text(200), Description text(2000),
	media_name text(10000), category text(100), page text(100), time_upload text(50))");


	$make_security_table = mysqli_query($con, "CREATE TABLE SECURITY_ADMIN(ID INT(11) NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), PASSWORD TEXT(40) NOT NULL)");
	$insert_default_password = mysqli_query($con, "INSERT INTO SECURITY_ADMIN(PASSWORD) VALUES('$real_user_key')");

	$sql = mysqli_query($con,"CREATE TABLE media_audio(ID int(11) not null auto_increment,
	primary key(ID), Description text(2000), media_name text(10000), category text(100), page text(100), time_upload text(50))");


	$sql = mysqli_query($con,"CREATE TABLE media_image(ID int(11) not null auto_increment,
	primary key(ID), Description text(2000), media_name text(10000), category text(100), page text(100), time_upload text(50))");

	$sql = mysqli_query($con,"CREATE TABLE contacts(ID int(11) not null auto_increment,
	primary key(ID), fname text(100), lname text(100), email text(100), message text(500), cdate date)");

	$sql = mysqli_query($con,"CREATE TABLE subscribe(ID int(11) not null auto_increment,
	primary key(ID),  name text(100), email text(100), cdate timestamp)");

	$event = mysqli_query($con,"CREATE TABLE events(ID int(11) not null auto_increment,
	primary key(ID),  name text(100), place text(100),  venue text(100),  day date");

    // header("location:login.php");

?>

<!-- <?php //include "footer.php";?>	 -->
