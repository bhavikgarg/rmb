<?php
    session_start();

    if(!isset($_SESSION['username']))
    {
        header("refresh : 0 ; url = ../index.php");
    }
    else
    {
?> 
<!DOCTYPE html>
<head>
<title> RMB : All Users </title>
	<?php

	     require('include/head.php');

	?>

</head>
<body class="hold-transition skin-green-light sidebar-mini">


		<div class = "wrapper">

			<header class = "main-header">
				<a href="#" class="logo">
					<center>
	          		<!-- mini logo for sidebar mini 50x50 pixels -->
	          		<span class="logo-mini">RMB</span>
	          <!-- logo for regular state and mobile devices -->
	          		<span class="logo-lg" style = 'margin-top : 5px'><img class="img-responsive" src = '../assets/img/rmb_logo.png'></span>
	          		</center>
	        	</a>	

	        	<!--
					including top navbar 
	        	-->
	        	<?php
	        		require('include/adminTopNav.php');
	        	?>

			</header>
			<!-- sidebar -->
			<aside class = 'main-sidebar'>

				<?php
	        		require('include/adminleftSideNavbar.php');
	        	?>

			</aside>

			<div class = 'content-wrapper'>
				

	        	<section class = 'content'>

	        		<!-- get data of all users from login table and display -->
	        		<?php

	        			$getAll = "SELECT * from login WHERE status = '1' ORDER BY id DESC";
	        			$allRes = mysqli_query($con , $getAll);
						if(mysqli_num_rows($allRes) > 0){

					?>
						<div class="box box-info">
						    <div class="box-header with-border">
						        <h3 class="box-title"> Users in RMB <br></h3>
						        
						    </div><!-- /.box-header -->
						    
						    <div class="box-body">
						        <br>
						        
						    	<table id="userTable" class="table table-bordered table-striped">
						          	<thead>
						                <tr>
						                	<th>S No</th>
						                	<th>Username</th>
						                	<th>Password</th>
						                	<th>Type</th>
						                	<th>Group</th>
						                	<th></th>    
						                </tr>
						            </thead>
						            <tbody>
						            
						            <?php
						                
						                $htmlString = "";
						                $count = 0;
						                while($row = mysqli_fetch_array($allRes, MYSQLI_ASSOC))
						                {
						                	$count += 1;
						        			$htmlString .= "<tr><td>".$count."</td>".
						        							"<td>".$row['username']."</td><td>".$row['password']."</td>";
						        			if($row['usertype'] == '1')
						        			{
						        				$type = "Admin";
						        			}	
						        			else if($row['usertype'] == '3'){
						        				$type = "User";
						        			}

						        			if(!empty($row['groupName'])){
						        				$group = $row['groupName'];
						        			}
						        			else
						        			{
						        				$group = "NA";
						        			}

						        			$htmlString .= "<td>".$type."</td><td>".$group."</td><td><button type = 'button' class = 'btn btn-danger' id = '".$row['id']."'>Delete</button></td>";
						                }
						                echo $htmlString;
						            ?>
						            </tbody>
						        </table>
						    </div> <!-- box-body -->
						</div>



					<?php		

						}
						else
						{
					?>
						<div class = 'col-sm-8 col-sm-offset-2'>
							<div class = 'callout callout-danger'>
						 		<center>There are no users currently</center>
						 	</div>
						</div>
					<?php		
						}


	        		?>

	        	</section>  <!-- .content -->


			</div> <!-- .content-wrapper -->

			<footer class="main-footer">
	        	<div class="pull-right hidden-xs">
	          		<b>Version</b> 2.3.0
	        	</div>
	        	<strong>Copyright &copy; 2014-2015 <a href="http://www.infolinksoftware.in">Infolink</a>.</strong> All rights reserved.
	      	</footer>

	      	
	</div> <!-- .wrapper ends -->


<!-- including the js files -->

<?php
	require('include/jsFiles.php');
?>
<script type = 'text/javascript'>
	/* code to delete a user */
	$(document).ready(function(){

		$('.btn').on('click', function(){
			var id = $(this).attr("id");
			console.log("ID is : "+id);
			$.ajax({
				url : 'deleteUser.php?id='+id,
				type : 'GET',
				success : function(data)
				{
					console.log(data);
					if (data == '1') {
						alert('User deleted successfully');
						location.reload();
					}
					else if(data == '0')
					{
						alert("Error in deleting..");
						location.reload();
					}
				},
				error : function(err)
				{
					alert("Error : "+err);
					location.reload();
				}
			});
		});

	});
</script>
</body>

</html>
 <?php
}
?>
