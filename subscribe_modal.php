<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Email Subscription</h4>
      </div>
      <div class="modal-body">
        <form class="form-signin" action="subscribe.php" method="post">
          <label for="name"  class="sr-only">Name</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
          <br/><label for="Email" class="sr-only">Email address</label>
          <input type="email" name="email" id="Email" class="form-control" placeholder="Email address" required autofocus>
          <legend></legend>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Subscribe</button>
        </form>
      </div>
    </div>
  </div>
</div>