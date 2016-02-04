<?php
  session_start();
  include("headerr.php");
  include("sideboard.php");
?>

<a href="#myimage" class="btn btn-link alert alert-danger" data-toggle="modal">Delete any of the images <i class="fa fa-chevron-down"></i></a><font size="+3"> -------Image Uploads for BOCH-------</font>
  <div id="myimage" class="modal fade">
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
            <th>Description</th>
            <th>Image</th>
          </tr>
          
          <?php 
            include("functions.php");
            if (!empty($_POST['sn'])) {
            # code...
            $sn = $_POST['sn'];
            $del = mysqli_query($con,"DELETE FROM media_image WHERE ID = '$sn'");
            }

            $select = mysqli_query($con, "SELECT * FROM `media_image` ORDER BY `media_image`.`ID` DESC ");
            if (!$select) {
              # code...
              echo "Erroe: ".mysqli_error($con);
            }

            while ($counter = mysqli_fetch_assoc($select)) {
              # code...
              $desc = $counter['Description'];
              $name = $counter['media_name'];
              $tym = $counter['time_upload'];
              $id = $counter['ID'];         
              echo"
                <tr>
                <td> $id</td>
                <td>$name</td>
                <td>$desc</td>
                <td> 
                  <img src='../media/images/$name' class='img-responsive' width='100'>
                </td>
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