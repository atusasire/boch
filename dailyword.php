<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Today's Word</h4>
      </div>
      <?php 
        include("functions.php");
        
        $select = mysqli_query($con, "SELECT * FROM `information` WHERE category='dailyWord' ORDER BY `information`.`ID` DESC LIMIT 1 ");
        if (!$select) {
          # code...
          echo "Erroe: ".mysqli_error($con);
        }

        while ($counter = mysqli_fetch_assoc($select)) {
          # code...
          $description = $counter['Description'];
          $desc = substr($description, 0, 100). "...";
          $name = $counter['title'];
          $id = $counter['ID'];         
          echo "
          	<div class='modal-header'>
          		<h5 class='modal-title'>The BOCH Word Title: $name</h5>
          	</div>
          	<div class='modal-body'>
          		$desc
          	</div>
          		";
        }
             
      ?> 
    </div>
  </div>
</div>