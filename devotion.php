<?php
  $currentPage = 'devotion';
  include "header.php"; 
?>

<div class="container background">
  	<div class="row">
  		<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 nopadding">
  			<?php 
                include("functions.php");
                
                $select = mysqli_query($con, "SELECT * FROM `media_image` ORDER BY `media_image`.`ID` DESC LIMIT 1 ");
                if (!$select) {
                  # code...
                  echo "Erroe: ".mysqli_error($con);
                }

                while ($counter = mysqli_fetch_assoc($select)) {
                  # code...
                  $desc = $counter['Description'];
                  $name = $counter['media_name'];
                  $id = $counter['ID'];         
                  echo"
                    <div class=''>
                      <img src='media/images/$name' class='img-responsive' width='300px'>
                    </div>
                  
                       ";
                }
                     
            ?>
            <!-- Button trigger modal -->
			<button type="button" class="btn-block btn-primary" data-toggle="modal" data-target="#myModal">
            	<h4>Subscribe for a BOCH devotional <i class="fa fa-chevron-right"></i></h4>
            </button>
            <?php include 'subscribe_modal.php'; ?>
  		</div>
      	<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 bg-success">
        	<!-- devotion starts -->
        	<div style="height:383px; overflow: auto;">
				<?php
					include("config.php");
					$start=0;
					$limit=1;

					if(isset($_GET['id']))
					{
						$id=$_GET['id'];
						$start=($id-1)*$limit;
					}
					else{
						$id=1;
					}
					//Fetch from database first 10 items which is its limit. For that when page open you can see first 10 items. 
					$query=mysqli_query($dbconfig,"select * from information where category='devotion' LIMIT $start, $limit");
					?>
					
					
					<?php
					//print 10 items
					while($result=mysqli_fetch_array($query))
					{
						echo "<h4 align='center'>Devotional Title: ".$result['title']."</h4>
							  <p class='jumbotron'>".$result['Description']."</p>";
					}
					?>
					
					
			</div>
			<?php
					//fetch all the data from database.
					$rows=mysqli_num_rows(mysqli_query($dbconfig,"select * from information where category='devotion' "));
					//calculate total page number for the given table in the database 
					$total=ceil($rows/$limit);?>
					<nav>
						<ul class="pager">

							<?php if($id>1)
								{
									//Go to previous page to show previous 10 items. If its in page 1 then it is inactive
									echo "<li><a href='?id=".($id-1)."' class='button'>OLDER<span aria-hidden='true'>&rarr;</span></a></li>";
								}
								if($id!=$total)
								{
									////Go to previous page to show next 10 items.
									echo "<li><a href='?id=".($id+1)."' class='button'><span aria-hidden='true'>&larr;</span>NEWER</a></li>";
								}
							?>

							<?php
							//show all the page link with page number. When click on these numbers go to particular page. 
									for($i=1;$i<=$total;$i++)
									{
										if($i==$id) { echo "<li class='active'>".$i."</li>"; }
										
										else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
									}
							?>
						</ul>
				</nav>
      	</div>
    </div>
</div>



<?php
  include "footer.php"; 
?>
