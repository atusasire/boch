<?php
  include "header.php"; 
?>

    <div class="container background">
      <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 nopadding">
            <!-- begining of the carousel -->

            <div id="carousel-example-generic" class="carousel slide">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
              
                <!-- First slide -->
                <div class="item active deepskyblue">
                  <img src="images/slide/1.jpg"/>
                  <div class="carousel-caption">
                   
                    <h3 data-animation="animated bounceInRight">
                      This is the caption for slide 1
                    </h3>
                  </div>
                </div> <!-- /.item -->
                
                <!-- Second slide -->
                <div class="item skyblue">
                  <img src="images/slide/2.jpg"/>
                  <div class="carousel-caption">
                    <h3 class="icon-container" data-animation="animated bounceInDown">
                      <span class="glyphicon glyphicon-heart"></span>
                    </h3>
                    <h3 data-animation="animated bounceInUp">
                      This is the caption for slide 2
                    </h3>
                    
                  </div>
                </div><!-- /.item -->
                
                <!-- Third slide -->
                <div class="item darkerskyblue">
                  <img src="images/slide/3.jpg"/>
                  <div class="carousel-caption">
                    <h3 class="icon-container" data-animation="animated zoomInLeft">
                      <span class="glyphicon glyphicon-glass"></span>
                    </h3>
                    <h3 data-animation="animated flipInX">
                      This is the caption for slide 3
                    </h3>
                    
                  </div>
                </div><!-- /.item -->
              
              </div><!-- /.carousel-inner -->

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div><!-- /.carousel -->

           <!-- end of the second carousel -->
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4" >
            <div class="ribbon both_ribbon" style="background-color: #efefef  ;"><h4>Word of the day <i class="fa fa-book fa-lg"></i></h4></div>
            <div style="margin-top:-25px;">
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
                  echo "$desc";
                }
                     
              ?> 
              <?php include 'dailyword.php'; ?>
                <button type="button" class="btn-link btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
                  Read more <i class="fa fa-chevron-right"></i>
                </button>
              <br/><br/>
            </div>
            <div class="ribbon both_ribbon">
              <?php
                include("functions.php");
                  
                  $select = mysqli_query($con, "SELECT * FROM `media_audio` ORDER BY `media_audio`.`ID` DESC LIMIT 1 ");
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
                        <h4>Audio podcast</h4>
                        <p class='text-muted'>Listen to: $desc</p>
                        <audio controls
                          data-info-album-art='No audio file yet'         
                          data-info-title='$name'
                          data-info-label='$desc'
                          data-info-year='$tym'           
                          <source src='media/audio/$name' type='audio/ogg' style='width:100%;margin-top:-2%'>         
                        </audio>
                   
                         ";
                  }
                       
                ?> 
            </div>
            <?php include 'prayer.php'; ?>
            <div  style="background: url('images/glorypic.png') no-repeat center; width: 100%; margin-top: -30px; height: 160px;">
              <div class="">
                <button type="button" class="btn-block btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                    <b>NEED PRAYER: MAKE A PRAYER REQUEST</b> 
                    <i class="fa fa-lg fa-chevron-right"></i> 
                </button>
              </div>
            </div>
          </div>

      </div>
      <div class="row" style="margin-top:5px;">
          <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 stripe">
            <div class="ribbon both_ribbon" style="background-color: wheat;">
              <h4>BOCH GLORY DEVOTIONAL</h4>
            </div>
            <?php 
              include("functions.php");
              
              $select = mysqli_query($con, "SELECT * FROM `information` WHERE category='devotion' ORDER BY `information`.`ID` DESC LIMIT 1 ");
              if (!$select) {
                # code...
                echo "Erroe: ".mysqli_error($con);
              }

              while ($counter = mysqli_fetch_assoc($select)) {
                # code...
                $description = $counter['Description'];
                $desc = substr($description, 0, 150). "...";
                $name = $counter['title'];
                $id = $counter['ID'];         
                echo "
                  <h3>$name</h3>
                  <p>$desc  <br/><a class='btn-mini' href='devotion.php'>Read more</a></p>
                    ";
              }
                   
            ?>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 nopadding stripe">
            <div class="ribbon both_ribbon" style="background-color: #eeefff;">
              <h4>TESTIMONIES</h4>
            </div>
            <?php 
              include("functions.php");
              
              $select = mysqli_query($con, "SELECT * FROM `information` WHERE category='testimony' ORDER BY `information`.`ID` DESC LIMIT 1 ");
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
                  <h3>$name</h3>
                  <p>$desc <br/><a class='btn-mini' href='testimony.php'>Read more</a></p>
                    ";
              }
                   
            ?>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <!-- <div class="ribbon both_ribbon" style="background-color: #efefef;">
              <h4>Email Subscription</h4>
            </div> -->
            <form class="form-signin" action="subscribe.php" method="post">
              <h4 class="">Stay Informed, Subscribe <i class="fa fa-chevron-down fa"></i></h4>
              <legend></legend>
              <label for="name"  class="sr-only">Name</label>
              <input type="text" name="name" id="inputPassword" class="form-control" placeholder="Name" required>
              <br/><label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
              <br/><button class="btn btn-sm btn-primary btn-block" type="submit">Click to Subscribe</button>
            </form>

          </div>
      </div>
      <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

          </div>
      </div>
       <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
             
          </div>
          
      </div>
    </div> <!-- /container -->
<?php
  include "footer.php"; 
?>
