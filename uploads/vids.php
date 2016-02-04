<!DOCTYPE html>
<html>
  <head>
    <title>Campaign shows and talks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">    
    <link href="css/bootstrap3_player.css" rel="stylesheet">
  </head>
  <body>
    
    <div class="container">
      <div class="alert alert-warning">
       <center><h2>NRM TALKS ON ELECTION 2016</h2> </center>          
      </div>
  
      <div class="row col-md-8 col-md-offset-2 col-xs-12">
         <?php 
             include("functions.php");
          $select = mysqli_query($con, "SELECT * FROM `media` ORDER BY `media`.`ID` DESC ");
          if (!$select) {
        
          }

          while ($counter = mysqli_fetch_assoc($select)) {
            # code...
            $desc = $counter['Description'];
            $name = $counter['media_name'];
            $tym = $counter['time_upload'];
            $id = $counter['ID'];         
            echo"

            <div align=''>
             <object class='embed-responsive-item'>
               <video controls>
          data-info-title='$name'
          data-info-label='$desc'
          data-info-year='$tym' 
          <source src='../media/$name'/>
               </video>
             </object>
           </div>  


            
        <audio controls
          data-info-album-art='../nrm/01.jpg'         
          data-info-title='$name'
          data-info-label='$desc'
          data-info-year='$tym'           
           <source src='../media/$name'/>         
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
