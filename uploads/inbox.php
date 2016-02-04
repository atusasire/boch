<?php
  session_start();
  include("headerr.php");
  include("sideboard.php");
?>

<a href="#inbox" class="btn btn-link alert alert-danger" data-toggle="modal">Delete any of the list items <i class="fa fa-chevron-down"></i></a><font size="+3"> ----User commmunications----</font>
  <div id="inbox" class="modal fade">
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
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Message</th>
          </tr>
          
          <?php 
            include("functions.php");
            if (!empty($_POST['sn'])) {
            # code...
            $sn = $_POST['sn'];
            $del = mysqli_query($con,"DELETE FROM contacts WHERE ID = '$sn'");
            }

            $select = mysqli_query($con, "SELECT * FROM `contacts` ORDER BY `contacts`.`ID` DESC ");
            if (!$select) {
              # code...
              echo "Erroe: ".mysqli_error($con);
            }

            while ($counter = mysqli_fetch_assoc($select)) {
              # code...
              $fname = $counter['fname'];
              $lname = $counter['lname'];
              $email = $counter['email'];
              $message = $counter['message'];
              $id = $counter['ID'];         
              echo"
                <tr>
                <td> $id</td>
                <td>$fname</td>
                <td>$lname</td>
                <td>$email</td>
                <td class='alert-info'>$message</td>
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