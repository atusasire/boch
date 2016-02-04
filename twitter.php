<?php
  $currentPage = 'twitter';
  include "header.php"; 
?>

<div class="container background" style="height:505px; overflow: auto;">
  	<div class="row">
  		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding">
  			<div class="page-header" align="center">
			  	<h4>Connect with on Twitter
			  		<small>Follow us</small>
				</h4>
			</div>
			<a class="twitter-timeline" href="https://twitter.com/Bochministries" data-widget-id="675270453502570496">Tweets by @Bochministries</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
   
  		</div>
  	</div>
</div>
<?php include "footer.php"; ?>  		