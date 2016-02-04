<?php
session_start();
if (!isset($_SESSION['loged_in'])) {
	# code...
	header("location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Audios</title>  
  	   <title>Audio talks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">    
    <link href="css/bootstrap3_player.css" rel="stylesheet">
  

<link rel="stylesheet" type="text/css" href="plugins/bootstrap.min.css">

</head>
 

<body>	
	  <div class="container">
      <div class="alert alert-warning">
       <center><h2>NRM TALKS ON ELECTION 2016</h2> </center>          
      </div>
	<div class = "well">
	<img src="../FDC/index.png" width = "100%" height = "20px">
 	<img src="../FDC/index.png" width = "100%" height = "20px">
	 
	 
	<div class = "row">
		<div class = "col-md-3 col-lg-3 col-sm-12 col-xs-12">
		<p>		

		<div id="accordiona" class="panel-group">
				<div class="panel">
					<div class="panel-heading">
						<div class="panel-title">
							<a href="#one" data-toggle="collapse" data-parent="#accordiona">			<center><p class = "alert-info">Upload informations</p></center>
</a>
						</div>
					</div>
					<div class="panel-collapse collapse" id="one">
						<div class="panel-body alert-warning">
		<form  method="post" enctype="multipart/form-data">
			File Description:
			<br/><textarea name = 'description'></textarea>
			<br/><input type="file" name="file" id="file"/> 
			<br/>
			<input class = "btn btn-primary" type="submit" name="submit" value="Upload File" />
		</form>
						</div>
					</div>
				</div>


		<a href="#myModal" class="btn btn-link" data-toggle="modal">Delete Media</a>
			<div id="myModal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<a href="" class="close" data-dismiss="modal">
								&times
							</a>
							<h2><center>Are you sure?</center></h2>
						</div>
						<div class="modal-body">
							<div class = "row">
							<div class = "col-sm-3 col-lg-3 col-xs-3 col-md-3">
							</div>
								<div class = "col-md-6 col-lg-6 col-xs-6 col-sm">
							 <p> 
								<form method = "POST">
									Enter SN: <input class = "form-control" name = "sn" required min = "1" type = "number">
									<br/>
									<input value = "Delete Media" type = "submit" class = "btn btn-danger">
								</form>
							</p>
					 
					</div>
						<div class = "col-md-3 col-xs-3 col-sm-3 col-lg-3">
							</div>
						</div>
						</div>
						 
					</div>
				</div>
			</div>



		</div>
			<div class = "col-md-9 col-lg-9 col-sm-9 col-xs-9">
				<?php
			 
include("functions.php");

	if (!empty($_POST['sn'])) {
							# code...
		$sn = $_POST['sn'];
		$del = mysqli_query($con,"DELETE FROM media WHERE ID = '$sn'");

	}
 if (isset($_POST['description']) && (isset($_FILES['file']))) {
	# code...
	$name = $_FILES["file"]["name"];
	$desc = $_POST['description'];
	$file = $_FILES['file']['name'];
	$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	if ( ($extension == 'mp4') || 
		($extension == 'asf')  ||
		($extension == 'avi')  || 
		($extension == 'vob')  ||
		($extension == 'mov')  ||
		($extension == 'rm')   ||
		($extension == 'mpg')  ||
		($extension == 'mwv')  ||
		($extension == 'ogv')  ||
		($extension == 'webm') ||
		($extension == 'mwv')  ||
		($extension == 'avi')
		) {
		# code...
		$names_of_media = "$file";
		$insert = mysqli_query($con, 
			"INSERT INTO media(Description,media_name,time_upload)
			VALUES('$desc','$names_of_media','$date_TRACK')");
		if ($insert) {
	move_uploaded_file($_FILES["file"]["tmp_name"], "../media/" . $_FILES["file"]["name"]);
	// move_uploaded_file($_FILES["file"]["tmp_name"], "videos/" . $_FILES["file"]["name"]);

	
		// header("location:media_upload.php");
	}
}

	else if (
		($extension == 'mp3')  ||
		($extension == 'aac')  ||
		($extension == 'ac3')  ||
		($extension == 'flac') ||
		($extension == 'aif')  ||
		($extension == 'm4a')  ||
		($extension == 'mp2')  ||
		($extension == 'ogg')  ||
		($extension == 'wav')  ||
		($extension == 'opus') ||
		($extension == 'ra')   ||
		($extension == 'mwa')  ||
		($extension == 'ogg')  ||
		($extension == 'dts') 

		) {
		$names_of_media = "$file";
		$insert = mysqli_query($con, "INSERT INTO media_audio(Description,media_name,time_upload)
			VALUES('$desc','$names_of_media','$date_TRACK')");
		if ($insert) {
		move_uploaded_file($_FILES["file"]["tmp_name"], "../media/" . $_FILES["file"]["name"]);
		echo "Stored Uploaded successifully";
	}
	}
	else if (
		($extension == 'flv')  ||
		($extension == 'png')  ||
		($extension == 'jpeg')  ||
		($extension == 'gif') ||
		($extension == 'ico')  ||
		($extension == 'jpg')  ||
		($extension == 'tif')  ||
		($extension == 'swf')  ||
		($extension == 'bmp')  ||	 
		($extension == 'dts') 
		) {
		# code...

		$names_of_media = "$file";
		$insert = mysqli_query($con, "INSERT INTO media_image(Description,media_name,time_upload)
			VALUES('$desc','$names_of_media','$date_TRACK')");
		if ($insert) {
		move_uploaded_file($_FILES["file"]["tmp_name"], "../media/" . $_FILES["file"]["name"]);
		echo "Stored Uploaded successifully";
		header("location:gallery.php");
	} 

		else{
			echo "Un supported formart.";
		}

	  
}
}
?> 
  
      <div class="row col-md-8 col-md-offset-2 col-xs-12">
         <?php 
             include("functions.php");
          $select = mysqli_query($con, "SELECT * FROM `media` ORDER BY `media`.`ID` DESC ");
          if (!$select) {
            # code...
            echo "Somethings no right!";
          }

          while ($counter = mysqli_fetch_assoc($select)) {
            # code...
            $desc = $counter['Description'];
            $name = $counter['media_name'];
            $tym = $counter['time_upload'];
            $id = $counter['ID'];         
           echo"
            Name: $name<br>
            SN: $id
          <video controls
          data-info-album-art='../nrm/01.jpg'         
          data-info-title='$name'
          data-info-label='$desc'
          data-nifo-year='$tym'    
          <video src='http://getwayhostels.azurewebsites.net/fdc/nrm/media/$name' controls>
       
        <source src='../media/$name'/>
        </video>
            
        <audio controls
          data-info-album-art='../nrm/01.jpg'         
          data-info-title='$name'
          data-info-label='$desc'
          data-info-year='$tym'           
          <source src='http://getwayhostels.azurewebsites.net/fdc/nrm/$name' type='audio/ogg'/>         
        </audio>
             ";
          }           
        ?> 

      </div><!-- /row -->
      <div class="row col-md-6 col-md-offset-3 col-xs-12">
      </div>  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> 
      <script src="js/bootstrap3_player.js"></script>  		 
					</div>
				</div>
			</div>
			</div>
			<script type="text/javascript" src="plugins/jquery-1.9.0.js"></script>
<script type="text/javascript" src="plugins/bootstrap.min.js"></script>
</body>
</html>



 