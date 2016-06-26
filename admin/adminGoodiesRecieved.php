<?php
session_start();
require '../config/config.php';


?>

<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">All Recieved Goodies</h3>
	</div><!-- /.box-header -->
						
	<div class="box-body">
		<?php

			$username = $_SESSION['username'];  // replace with SESSION username
			$groupName = $_SESSION['group'];   // replace with SESSION group name

			$sql = "SELECT * from goodies WHERE sendTo = 'rmb' ORDER BY id desc";

			$res = mysqli_query($con , $sql);
			$htmlString = "";
			if($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
			{
			while($row)
			{
		?>		
			<!-- <div class="col-md-3">
              <div class="box box-warning">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <p>
                  	<center>
                  	<br>
                  	<?php
                  		/*echo $row['description'];*/
                  	?>
                  	<br><br>
                  	Recieved From : <?php /*echo $row['sentBy'];*/ ?>
                  	<br><br>
                  	Valid upto : <?php /*echo $row['validity'];*/ ?>
                  	</center>
                  </p>
                </div>
              </div>
            </div>
 -->

 	<!-- .bg-red,
.bg-yellow,
.bg-aqua,
.bg-blue,
.bg-light-blue,
.bg-green,
.bg-navy,
.bg-teal,
.bg-olive,
.bg-lime,
.bg-orange,
.bg-fuchsia,
.bg-purple,
.bg-maroon,
.bg-black,
.bg-red-active,
.bg-yellow-active,
.bg-aqua-active,
.bg-blue-active,
.bg-light-blue-active,
.bg-green-active,
.bg-navy-active,
.bg-teal-active,
.bg-olive-active,
.bg-lime-active,
.bg-orange-active,
.bg-fuchsia-active,
.bg-purple-active,
.bg-maroon-active,
.bg-black-active, -->
 		<?php
 			$n = rand(1, 10000);
 			
 			if($n % 2 == 0)
 			{
 				$widgetClass = "bg-aqua-active";
 			}
 			else if($n % 3 == 0)
 			{
 				$widgetClass = "bg-yellow-active";	
 			}
 			else if($n % 4 == 0)
 			{
 				$widgetClass = "bg-green-active";
 			}
 			else if($n % 5 == 0)
 			{
 				$widgetClass = "bg-lime-active";	
 			}
 			else if($n % 7 == 0)
 			{
 				$widgetClass = "bg-olive-active";
 			}
 			else if($n % 11 == 0)
 			{
 				$widgetClass = "bg-teal-active";	
 			}
 			else if($n % 13 == 0)
 			{
 				$widgetClass = "bg-navy-active";		
 			}
 			else
 			{
 				$widgetClass = "bg-fuchsia-active";	
 			}
 		?>	
 		<div class="col-md-4">
              <!-- Widget: user widget style 1 -->
              <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header <?php echo $widgetClass ?>">
                  <!-- <h3 class="widget-user-username">Alexander Pierce</h3>
                  <h5 class="widget-user-desc">Founder &amp; CEO</h5> -->
                  <center>
                  	<h5 class="widget-user-desc"><?php echo $row['description'] ?></h5>
                  </center>
                </div>
                <div class="widget-user-image">
                  
                  <img class = 'img-circle' src = '../assets/images/images.png'>

                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-6 border-right">
                      <div class="description-block">
                        <h5 class="description-header">Sent By</h5>
                        <span><?php echo $row['sentBy'] ?></span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                      <div class="description-block">
                        <h5 class="description-header">Valid Upto</h5>
                        <span>

                        <?php 
                        	$d = date_create($row['validity']);
                        	echo date_format($d, 'jS F Y');
                        ?>

                        </span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    
                  </div><!-- /.row -->
                </div>
              </div><!-- /.widget-user -->
            </div><!-- /.col -->
 		
		<?php		
			$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
			}
		}
			else
			{
		?>
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="callout callout-danger">

						<center>
							
						There are no available goodies

						</center>

						</div>
					</div>
				</div>
		<?php	
			}
		?>
	</div>
</div>