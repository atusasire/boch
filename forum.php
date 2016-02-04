<?php
  $currentPage = 'forum';
  include "header.php"; 
?>
<div class="container background" style="height:505px; overflow: auto;">
	<legend><h4>Welcome to BOCH Forum, Join the Discussion</h4></legend>
  <div id="disqus_thread"></div>
      <script>
      
      (function() { // DON'T EDIT BELOW THIS LINE
      var d = document, s = d.createElement('script');
      
      s.src = '//bochug.disqus.com/embed.js';
      
      s.setAttribute('data-timestamp', +new Date());
      (d.head || d.body).appendChild(s);
      })();
      </script>
      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
    </div>
</div>
<?php
  include "footer.php"; 
?>