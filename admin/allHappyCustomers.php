<?php
session_start();
require 'config/config.php';

$username = $_SESSION['username'];
?>

<div class = 'box box-primary'>
	<div class="box-header with-border">
		<h3 class="box-title">All Happy Customers </h3>
	</div><!-- /.box-header -->
	
	<div class="box-body">
		<?php 
			
			$sql = "SELECT * from happy_customers WHERE customerOf = '".$username."'";
			$res = mysqli_query($con , $sql);
			
			if($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
			{
		?>		
		<table id="allCustomerTable" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Name</th>                      	
					<th>Email ID</th>
					<th>Contact</th>
					<th>Address</th>
					<th>Website</th>
					<th>Date of Birth</th>
					<th>Date of Anniversary</th>
				</tr>
			</thead>
			<tbody>
		<?php
			$htmlString = "";
			while($row)
			{
				
				$htmlString .= "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['contact']."</td><td>".$row['address']."</td><td>".$row['website']."</td><td>".$row['dob']."</td><td>".$row['doa']."</td></tr>";
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
							
						There are no happy customer list

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

		$('#allCustomerTable').DataTable({
	      "paging": true,
	      "lengthChange": true,
	      "searching": true,
	      "ordering": true,
	      "info": true,
	      
	    });


	});
</script>    