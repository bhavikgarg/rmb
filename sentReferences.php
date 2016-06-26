<?php
session_start();
require 'config/config.php';

$username = $_SESSION['username'];
?>

<div class = 'box box-primary'>
	<div class="box-header with-border">
		<h3 class="box-title">Sent References</h3>
	</div><!-- /.box-header -->
	
	<div class="box-body">
		<?php 
			$sql = "SELECT * from send_message WHERE sender_username = '".$username."'";

			$res = mysqli_query($con , $sql);
			
			if($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
			{
		?>		
		<table id="sentTable" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Reference</th>                      	
					<th>Remark</th>
					<th>Category</th>
					<th>Sent To</th>
					<th>Name</th>
					<th>Contact</th>
					<th>Email</th>
					<th>Address</th>
					<th>Rating</th>
				</tr>
			</thead>
			<tbody>
		<?php
			$htmlString = "";
			while($row)
			{
				
				$htmlString .= "<tr><td>".$row['Reference']."</td><td>".$row['Remark']."</td><td>".$row['Category']."</td><td>".$row['Receiver_Mail_Id']."</td><td>".$row['User_Name']."</td><td>".$row['User_Phone']."</td><td>".$row['User_Mail']."</td><td>".$row['User_Address']."</td><td>".$row['Rating']."</td></tr>";
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
							
						There are no sent references

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

		$('#sentTable').DataTable({
	      "paging": true,
	      "lengthChange": true,
	      "searching": true,
	      "ordering": true,
	      "info": true,
	      
	    });

		
	});
</script>    