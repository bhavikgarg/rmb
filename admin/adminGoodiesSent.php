<?php

session_start();
require '../config/config.php';

$username = $_SESSION['username'];
?>

<div class = 'box box-primary'>
	<div class="box-header with-border">
		<h3 class="box-title">Sent Goodies</h3>
	</div><!-- /.box-header -->
	
	<div class="box-body">
		<?php 
			$sql = "SELECT * from goodies WHERE sentBy = 'RMB'";

			$res = mysqli_query($con , $sql);
			
			if($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
			{
		?>		
		<table id="sentTable" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Goodie Description</th>                      	
					<th>Validity</th>
					<th>Sent To</th>
					
				</tr>
			</thead>
			<tbody>
		<?php
			$htmlString = "";
			while($row)
			{
				
				$htmlString .= "<tr><td>".$row['description']."</td><td>".$row['validity']."</td><td>".$row['sendTo']."</td></tr>";
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
							
						There are no sent goodies

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