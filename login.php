<?php
	include("header.php");
?>
<div class="navbar">
  <div class="navbar-inner">
    <div class="right"><a href="#" data-panel="left" class="link open-panel icon-only"><i class="icon icon-bars"></i></a></div>
  </div>
</div>
<div class="pages" style="height:505px; overflow: auto;">
  <div data-page="about" class="page">
    <div class="page-content">
      <div class="content-block">
      	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


      	<div class = "row">
		<div class = "col-xs-1 col-sm-1 col-md-3 col-lg-3">
			
		</div>

		<div class = "col-sm-11 col-xs-10 col-md-6 col-lg-6 ">
			<form action = "login_controler.php" method = "POST" class = "well">
				<legend> BOCH Login Page</legend>
				Password: <input type = "password" name = "log_pin" class = "form-control" required>
				<br/><input type = "submit" value = "Login" class = "btn btn-primary btn-block">
			<?php
			session_start();
 
			if (isset($_SESSION['illeagel_password'])) {
				# code...
				echo $_SESSION['illeagel_password'];
			}
			if (isset($_SESSION['Inactive'])) {
				# code...
				echo $_SESSION['Inactive'];
			}
			?>
		 
		     
			</form>
			<p>Only the admin will Login in</p>
		</div>

		<div class = "col-sm-1 col-xs-1 col-md-1 col-lg-1">
		</div>
	</div>

	<!--//main -->
	
 </div>
    </div>
  </div>
</div>