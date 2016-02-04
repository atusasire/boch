<?php
  session_start();
  include("headerr.php");
  include("sideboard.php");
?>
<a href="#subscribe" class="btn btn-link alert alert-danger" data-toggle="modal">Delete any of the list subscribers <i class="fa fa-chevron-down"></i></a><font size="+3"> ----User subscriptions----</font>

  <div id="subscribe" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <a href="" class="close" data-dismiss="modal">
            &times
          </a>
          <h2><center>Are you sure?</center></h2>
        </div>
        <div class="modal-body">
          
            <form method = "POST">
              Enter SN: <input class = "form-control" name = "sn" required min = "1" type = "number">
              <br/>
              <input value = "Delete Media" type = "submit" class="form-control btn btn-primary">
            </form>
          </p>
       
        </div>
      </div>
    </div>
  </div>
    
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>
          <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Email</th>
          </tr>
          
          <?php 
            include("functions.php");
            if (!empty($_POST['sn'])) {
            # code...
            $sn = $_POST['sn'];
            $del = mysqli_query($con,"DELETE FROM subscribe WHERE ID = '$sn'");
            }

            $select = mysqli_query($con, "SELECT * FROM `subscribe` ORDER BY `subscribe`.`ID` DESC ");
            if (!$select) {
              # code...
              echo "Erroe: ".mysqli_error($con);
            }

            while ($counter = mysqli_fetch_assoc($select)) {
              # code...
              $fname = $counter['name'];
              $email = $counter['email'];
              $id = $counter['ID'];         
              echo"
                <tr>
                  <td> $id</td>
                  <td>$fname</td>
                  <td>$email</td>
                </tr>
                   ";
            }
                 
          ?> 
        </tbody>
      </table>
  </div>
</div>

</body>
</html>