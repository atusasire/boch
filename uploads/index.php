<!DOCTYPE html>
<html>
  <head>
    <title>Audio talks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">    
    <link href="css/bootstrap3_player.css" rel="stylesheet">
  

  </head>
  <body>
    
    <div class="container">
      <div class="alert alert-warning">
       <center><h2>BOCH</h2> </center>          
      </div>
  
      <div class="row col-md-8 col-md-offset-2 col-xs-12">
         <?php 
             include("functions.php");
          $select = mysqli_query($con, "SELECT * FROM `media_audio` ORDER BY `media_audio`.`ID` DESC ");
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
            
            
        <audio controls
          data-info-album-art='../nrm/01.jpg'         
          data-info-title='$name'
          data-info-label='$desc'
          data-info-year='$tym'           
          <source src='../media/$name' type='audio/ogg' />         
        </audio>
             ";
          }
           
        ?> 


 

      </div><!-- /row -->
      <div class="row col-md-6 col-md-offset-3 col-xs-12">
      </div>  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> 
      <script src="js/bootstrap3_player.js"></script>
    

    </div><!-- container -->
  </body>
</html>
