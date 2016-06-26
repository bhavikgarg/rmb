<?php
    session_start();

    if(!isset($_SESSION['username']) || $_SESSION['type'] == 1)
    {
        header("refresh : 0 ; url = index.php");
    }
    else
    {
?> 
<!DOCTYPE html>
<head>

	<?php

	     require('include/head.php');

	?>

<style>
#external-events .fc-event {
	margin : 10px;
	padding : 10px;
}

#deleteDiv {
	
	height : 30px;
	border : 1px dashed gray;
}
#trash{
		width: 80%;
		margin-left: 10%;
		height:60px;
		line-height: 50px;
		padding-bottom: 15px;
		color : red;
		border : 1px dashed gray;		
	}

</style>
</head>
<body class="hold-transition skin-green-light sidebar-mini">


		<div class = "wrapper">

			<header class = "main-header">
				<a href="home.php" class="logo">
					<center>
	          		<!-- mini logo for sidebar mini 50x50 pixels -->
	          		<span class="logo-mini">RMB</span>
	          <!-- logo for regular state and mobile devices -->
	          		<span class="logo-lg" style = 'margin-top : 5px'><img class="img-responsive" src = 'assets/img/rmb_logo.png'></span>
	          		</center>
	        	</a>	

	        	<!--
					including top navbar 
	        	-->
	        	<?php
	        		require('include/topNav.php');
	        	?>

			</header>
			<!-- sidebar -->
			<aside class = 'main-sidebar'>

			<?php
					require('include/leftSideNavbar.php');
			?>

			</aside>

			<div class = 'content-wrapper'>
				

	        	<section class = 'content'>

	        		<!-- calendar code starts -->

	        		

						<!-- <div id='external-events'>
							<h4>Draggable Events</h4>
							
							<p>
								<img src="assets/img/trashcan.png" id="trash" alt="">
							</p>
						</div>

						<div id='calendar'></div>

						<div style='clear:both'></div>

						<xspan class="tt">x</xspan>
 -->

 						<div class="row">
				            <div class="col-md-3 col-sm-6 col-xs-12">
				            
				              <div class="info-box" id = "allGoodies">
				                <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
				                <div class="info-box-content">
				                  <span class="info-box-text">Inbox</span>
				                  <?php
				                  $username = $_SESSION['username'];  
								  $groupName = $_SESSION['group'];
				                  $sql = "SELECT count(*) c from goodies WHERE sendTo = '".$username."' OR sendTo = '".$groupName."'";
								  $countUnSeen = "SELECT count(*) c1 from goodies WHERE isSeen = 'n' AND sendTo = '".$username."' OR sendTo = '".$groupName."'";
								  $m = mysqli_query($con , $sql);
								  if($z = mysqli_fetch_array($m, MYSQLI_ASSOC))
								  {
								  	$c1 = $z['c'];
								  }
								  else
								  {
								  	$c1 = 0;
								  }

								  $n = mysqli_query($con, $countUnSeen);
								  if($z1 = mysqli_fetch_array($n , MYSQLI_ASSOC)){
								  	$c2 = $z1['c1'];
								  }
				                  ?>
				                  <span class="info-box-number"><?php echo $c1; ?></span>
				                  
				                  <span style = 'color : red'><?php  if(isset($c2) && $c2 != 0) echo $c2 . " unseen messages"; ?></span>
				                </div><!-- /.info-box-content -->
				              </div><!-- /.info-box -->
				            
				            </div><!-- /.col -->
				            <?php
				                  	$username = $_SESSION['username'];
				                  	$ref_sql = "SELECT count(*) c from send_message WHERE Receiver_Mail_Id = '".$username."'";

				                  	$ref_res = mysqli_query($con , $ref_sql);
				                  	if($r = mysqli_fetch_array($ref_res, MYSQLI_ASSOC))
				                  	{
				                  		$c = $r['c'];

				                  	}
				                  	else
				                  	{
				                  		$c = 0;
				                  	}

				                  ?>

				            <div class="col-md-3 col-sm-6 col-xs-12">
				              <div class="info-box">
				                <span class="info-box-icon bg-green"><i class="fa fa-rupee"></i></span>
				                <div class="info-box-content">
				                  <span class="info-box-text">Total</span>
				                  <span class="info-box-number"><?php echo $c*5000; ?></span>
				                </div><!-- /.info-box-content -->
				              </div><!-- /.info-box -->
				            </div><!-- /.col -->
				            <div class="col-md-3 col-sm-6 col-xs-12">

				              <div class="info-box" id = "allReferences">
				                <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
				                <div class="info-box-content">
				                  <span class="info-box-text">Reference</span>
				                  
				                  <span class="info-box-number"><?php echo $c ?></span>
				                </div><!-- /.info-box-content -->
				              </div><!-- /.info-box -->
				            </div><!-- /.col -->
				            <div class="col-md-3 col-sm-6 col-xs-12">
				              <div class="info-box" id = "allMembers">
				                <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>
				                <div class="info-box-content">


				                  <span class="info-box-text">Members</span>

				                  <?php

				                  	$group = $_SESSION['group'];
				                  	$sql = "SELECT count(*) c from grouprecord WHERE GNAME = '".$group."'";

				                  	$res = mysqli_query($con , $sql);
				                  	if($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
				                  	{
				                  		$count = $row['c'];
				                  	}
				                  	else
				                  	{
				                  		$count = 1;
				                  	}

				                  ?>

				                  <span class="info-box-number"><?php echo $count; ?></span>
				                </div><!-- /.info-box-content -->
				              </div><!-- /.info-box -->
				            </div><!-- /.col -->
				          </div><!-- /.row -->

				          <br>
					
						<div class="row">
			            <div class="col-md-3">
			              <div class="box box-solid">
			                <div class="box-header with-border">
			                  <h4 class="box-title">Drag Events to Calendar</h4>
			                </div>
			                <div class="box-body">
			                  <!-- the events -->
			                  <div class="row">
			                   <div id='external-events'>
									
									<div class='fc-event bg-green'>
										<center>New Event</center>
									</div>
									
									<div id="trash">
										<center>Drop events here to delete </center>
									</div>
									
								</div>
			                  </div>

			                  
			                </div><!-- /.box-body -->
			              </div><!-- /. box -->
			              
			            </div><!-- /.col 3 -->
			            <div class="col-md-9">
			              <div class="box box-primary">
			                <div class="box-body no-padding">
			                  <!-- THE CALENDAR -->
			                  <div id="calendar"></div>
			                </div><!-- /.box-body -->
			              </div><!-- /. box -->
			            </div><!-- /.col -->
			          </div><!-- /.row -->
	        		

	        		<!-- calendar code ends -->
	        		<!-- modal code starts -->
	        	<input type = 'hidden' id = 'eventName'>	
	        	<input type = 'hidden' id = 'eID'>
	        	<div id="eventModal" class="modal fade" role="dialog">
	        		<form id = 'createEventForm'>
				        <div class="modal-dialog">
				            <div class="modal-content">
				                <div class="modal-header">
				                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				                    <h4 class="modal-title">Create New Event</h4>
				                </div>
				                <div class="modal-body">

				                      <div class = "row">

				                          <div class = "col-md-10 col-md-offset-1 col-xs-10 col-xs-offset-1 col-lg-10 col-lg-offset-1 col-sm-10 col-sm-offset-1">

				                              <!-- form starts -->

				                                  <div class="box-body">
				                                      
				                                    <label for="eventTitle">Event Title</label>
				                                    <input type="text" class="form-control" id="eventTitle" name = "title">
				                                     
								            	  		<div class="checkbox icheck">
											                <label>
											                  	<input type="checkbox" id = 'emailDivControl' value = 'setReminder'> &nbsp; <strong> Send Reminder Mail</strong>
											                </label>
											            </div>
								              			
								              		
				                                      <div class="form-group" id = 'emailDiv' style = 'display : none'>
				                                          <label for="email"> Email </label>
				                                          <input type="email" class="form-control" id="email" name = "email">
				                                          <span class = 'help-block'>Specify the email of person</span>
				                                          <span class = "help-block field" id = "emailError" style = "color : red"></span>

				                                          <label for = 'msg'> Message </label>
				                                          <textarea name = 'message' class="form-control" id = 'message' rows = "2"></textarea>
				                                          <span class="help-block" style = 'color : red' id = 'msgErr'></span>
				                                      </div>



				                                  </div><!-- /.box-body -->


				                              <!--</form>-->
				                          </div>
				                      </div>  <!-- row for form ends -->

				                </div>
				                <div class="modal-footer">
				                    <!-- data-toggle="modal" data-target="#surveyModal3" -->
				                    <button type="button" class="btn btn-info pull-right" id = "eventBTN"><i class = "fa fa-plus"></i> &nbsp;Create Event </button>

				                </div>
				            </div><!-- /.modal-content -->
				        </div><!-- /.modal-dialog -->
				      </form>  
				    </div>

				    <!-- modal code ends -->

	        	</section>  <!-- .content -->


			</div> <!-- .content-wrapper -->

			<footer class="main-footer">
	        	<div class="pull-right hidden-xs">
	          		<b>Version</b> 2.3.0
	        	</div>
	        	<strong>Copyright &copy; 2014-2015 <a href="">Bhavik Garg</a>.</strong> All rights reserved.
	      	</footer>

	      	<!-- right sidebar -->

	      	<!-- <aside class="control-sidebar control-sidebar-dark">
	      		<?php
	      			/*require('include/rightSideNavbar.php');*/
	      		?>
	      	</aside>
	      	Add the sidebar's background. This div must be placed
	           immediately after the control sidebar
	      	<div class="control-sidebar-bg"></div> -->
	</div> <!-- .wrapper ends -->


<!-- including the js files -->

<?php
	require('include/jsFiles.php');
?>
<script type="text/javascript" src = 'assets/js/home.js'></script>
</body>

</html>
 <?php
}
?>
