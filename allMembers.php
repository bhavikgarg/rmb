<?php
session_start();
require 'config/config.php';

$username = $_SESSION['username'];
?>

<div class = 'box box-primary'>
	<div class="box-header with-border">
		<h3 class="box-title">All Members of group - <?php echo $_SESSION['group']?></h3>
	</div><!-- /.box-header -->
	
	<div class="box-body">
		<?php 
			$group = $_SESSION['group'];
			$sql = "SELECT * from grouprecord WHERE GNAME = '".$group."'";
			$res = mysqli_query($con , $sql);
			
			if($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
			{
		?>		
		<table id="allMemberTable" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Username</th>                      	
					<th>Email ID</th>
					<th>Contact</th>
					<th>Category</th>
					
				</tr>
			</thead>
			<tbody>
		<?php
			$htmlString = "";
			while($row)
			{
				
				$htmlString .= "<tr><td>".$row['USERNAME']."</td><td>".$row['EMAILID']."</td><td>".$row['MOBILE_NO']."</td><td>".$row['CATEGORY']."</td></tr>";
				$row = mysqli_fetch_array($res, MYSQLI_ASSOC);
			}
			echo $htmlString;
		?>		
			</tbody>
		</table>
		<?php 
			}	                    
		

			
			

			
			else
			{
		?>
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="callout callout-danger">

						<center>
							
						There are no members in this group

						</center>

						</div>
					</div>
				</div>
		<?php	
			}
		?>
	</div>	
	
	
	<div class="box-footer">	
	</div>
</div>


<script type="text/javascript">



	$(document).ready(function(){

		$('#allMemberTable').DataTable({
	      "paging": true,
	      "lengthChange": true,
	      "searching": true,
	      "ordering": true,
	      "info": true,
	      
	    });


	});
</script>    