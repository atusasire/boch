
<?php
  include("headerr.php");
  include("sideboard.php");
?>


	<div class="alert alert-info">
		<form  method="post" enctype="multipart/form-data">
			
			File Category:
			<br/>
			<select name = 'category' class="form-control">
				<option>audio</option>
				<option>video</option>
				<option>image</option>
			</select>
			<br/>
			For Page:
			<br/>
			<select name = 'page' class="form-control">
				<option>home</option>
				<option>about</option>
				<option>event</option>
				<option>devotion</option>
				<option>contact</option>
			</select>
			<br/>
			File Description:
			<br/><textarea name = 'description' class="form-control"></textarea>
			<br/><input type="file" name="file" id="file" class=""/> 
			<br/><br/>
			<input class = "btn btn-primary" type="submit" name="submit" value="Upload File" />
		</form>
	</div>
		

<?php
	include("functions.php");

	if (!empty($_POST['sn'])) {
							# code...
		$sn = $_POST['sn'];
		$del = mysqli_query($con,"DELETE FROM media_audio WHERE ID = '$sn'");

	}
		 
	if (isset($_POST['description']) && (isset($_FILES['file']))) {
		# code...
		$name = $_FILES["file"]["name"];
		$desc = $_POST['description'];
		$category = $_POST['category'];
		$page = $_POST['page'];
		$file = $_FILES['file']['name'];
		$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
		if (($extension == 'mp4') || 
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
				"INSERT INTO media(Description,media_name, category, page, time_upload)
				VALUES('$desc','$names_of_media', '$category', '$page', $date_TRACK')");
			if ($insert) {
			move_uploaded_file($_FILES["file"]["tmp_name"], "../media/video/" . $_FILES["file"]["name"]);
			echo "Stored Uploaded successifully";
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
			move_uploaded_file($_FILES["file"]["tmp_name"], "../media/audio/" . $_FILES["file"]["name"]);
			echo "<p class='alert alert-success'>Stored Uploaded successifully</p>";
			header("location:audio.php");
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
			move_uploaded_file($_FILES["file"]["tmp_name"], "../media/images/" . $_FILES["file"]["name"]);
			echo "Stored Uploaded successifully";
			header("location:gallery.php");
		} 

			else{
				echo "Un supported formart.";
			}

		 
			// echo "Only mp4 are accepted";
	}
	}
	?> 
</div>
				
		  
			     
		  
      
</body>
</html>



 