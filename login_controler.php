<?php
	include("header.php");
?>
<?php

include("functions.php");
session_start();
// teachers or student
if (isset($_SESSION['illeagel_password'])) {
	# code...
	unset($_SESSION['illeagel_password']);
}
if (isset($_SESSION['Inactive'])) {
	# code...
	unset($_SESSION['Inactive']);
}
$phone = $login_tag = "";
if (isset($_POST['log_pin'])) {
 
	$pin = $_POST['log_pin'];
	$pin = hash("ripemd128", $pin);
	// check teacher
	$select = mysqli_query($con, "SELECT PASSWORD FROM security_admin");
	if ($select) {
		# code...
		while ($te = mysqli_fetch_assoc($select)) {
			# code...
			$pass = $te['PASSWORD'];
			if ($pass == $pin) {
				# code...
				$_SESSION['loged_in'] = $pass;
				header("location:uploads/dashboard.php");
			}
			else{
				$_SESSION['illeagel_password'] = "Invalid Pin";
				$no = $_SESSION['illeagel_password'];
				echo "<center class = 'alert-danger'>				 
							$no
				</center>";
				header("Location:index.php");
			}
		}
	}
	}

 ?>