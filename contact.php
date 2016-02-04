<?php
  $currentPage = 'contact';
  include "header.php"; 
?>


<div class="container background" style="height:505px; overflow: auto;" >
	<div class="row">
	  	<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
	  		<form class="form-horizontal" action="contact_handler.php" method="POST">
	  		  <legend><h4>Send us a message <i class="fa fa-envelope"></i></h4></legend>
	  		  <div class="form-group">
			    <label for="fname" class="col-sm-2 control-label">First Name</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="lname" class="col-sm-2 control-label">Surname</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" name="lname" id="lname" placeholder="Surname" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
			    <div class="col-sm-10">
			      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="fname" class="col-sm-2 control-label">Message</label>
			    <div class="col-sm-10">
			      <textarea class="form-control" name="message" id="sname" placeholder="Type message..." required></textarea>
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Send Message</button>
			    </div>
			  </div>
			</form>
	  	</div>
	  	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
	  		<legend><h4>Our Location <i class="fa fa-globe fa-lg fa-spin"></i></h4></legend>
	  		<div class=" bg-success">
		  		<p style="text-align:center">Amazing Grace Gardens</p>
		        <p style="text-align:center">Next To Bible House</p>
		        <p style="text-align:center">Bombo Road,</p> 
		       
		        <p style="text-align:center">P.O. Box 35466,</p>
		        <p style="text-align:center"> Kampala, Uganda</p>
		    </div>
		    <legend><h4><i class="fa fa-phone fa-lg"></i> Call us on</h4></legend>
	  		<div class=" bg-success">
		  		<p>
			  		<font size="+1" style="text-align:center">
			  			+256785297660
			  		</font>
			  	</p> 
		    </div>
	  	</div>
	  	
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 container">
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:538px;width:100%;color:black;"><div id="gmap_canvas" style="height:538px;width:100%;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">http://www.themecircle.net</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(0.32440304011705967,32.57372936190188),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(0.32440304011705967, 32.57372936190188)});infowindow = new google.maps.InfoWindow({content:"<b>Body Of Christ Ministries</b><br/>Bombo Road<br/> Kampala" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

		</div>
	</div>
</div>

<?php
  include "footer.php"; 
?>
