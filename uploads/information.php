<?php
  include("headerr.php");
  include("sideboard.php");
?>


	<div class="alert alert-info">
		<form  method="post" action="info.php">
			Title
			<br/><input type="text" name="title" id="file" class="form-control"/>
			<br/>
			File Category:
			<br/>
			<select name = 'category' class="form-control">
				<option>header</option>
				<option>devotion</option>
				<option>footer</option>
				<option>dailyWord</option>
				<option>body</option>
				<option>event</option>
				<option>whoweare</option>
				<option>testimony</option>
				<option>other</option>
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
			Description:
			<br/><textarea name = 'Description' class="form-control"></textarea>
			
			<br/><br/>
			<input class = "btn btn-primary" type="submit" name="submit" value="Submit" />
		</form>
	</div>