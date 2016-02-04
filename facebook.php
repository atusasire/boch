<?php
  $currentPage = 'facebook';
  include "header.php"; 
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 
<div class="container background" style="height:505px; overflow: auto;">
  	<div class="row">
  		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 nopadding">
  			<div class="page-header" align="center">
			  	<h4>Connect with on Facebook
			  		<small>Like our page</small>
				</h4>
			</div>	
  			<div class="fb-page" data-href="https://www.facebook.com/bochministries" data-tabs="timeline" data-width="100%" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/bochministries"><a href="https://www.facebook.com/bochministries">BOCH</a></blockquote></div></div>
   			</div>
  		</div>
  	</div>
</div>

<?php include "footer.php"; ?>