<?php

session_start();
require 'config/config.php';

$username = $_SESSION['username'];
?>
<link rel = "stylesheet" href = "rateit/src/rateit.css">
<script src = "rateit/src/jquery.rateit.min.js"></script>

<style>
div.bigstars div.rateit-range
{
    background: url(rateit/example/content/star-white32.png);
    height: 32px;
}

div.bigstars div.rateit-hover
{
    background: url(rateit/example/content/star-gold32.png);
}

div.bigstars div.rateit-selected
{
    background: url(rateit/example/content/star-red32.png);
}

div.bigstars div.rateit-reset
{
    background: url(rateit/example/content/star-black32.png);
    width: 32px;
    height: 32px;
}

div.bigstars div.rateit-reset:hover
{
    background: url(rateit/example/content/star-white32.png);
}


</style>

<div class = 'box box-primary'>
	<div class="box-header with-border">
		<h3 class="box-title">All Recieved References</h3>
	</div><!-- /.box-header -->
	
	<div class="box-body">
		<?php 
			$sql = "SELECT * from send_message WHERE Receiver_Mail_Id = '".$username."'";

			$res = mysqli_query($con , $sql);
			
			if($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
			{
		?>		
		<table id="referenceTable" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Reference</th>                      	
					<th>Remark</th>
					<th>Category</th>
					<th>Sent By</th>
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
				if(empty($row['Rating']))
				{
					$rating = "<center><span><a href = '#' data-toggle='modal' data-target='#ratingModal' onclick = 'rate(".$row['id'].")'> Rate this reference </a> </span></center>";
				}
				else
				{
					$rating = $row['Rating'];
				}
				$htmlString .= "<tr><td>".$row['Reference']."</td><td>".$row['Remark']."</td><td>".$row['Category']."</td><td>".$row['sender_username']."</td><td>".$row['User_Name']."</td><td>".$row['User_Phone']."</td><td>".$row['User_Mail']."</td><td>".$row['User_Address']."</td><td>".$rating."</td></tr>";
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
							
						There are no available references

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

<div id="ratingModal" class="modal fade" role="dialog">

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"> Rate this reference </h4>
                    </div>
                    <div class="modal-body">
                        <center> <div class = 'rateit bigstars' data-rateit-starwidth='32' data-rateit-starheight='32' id = 'rating'></div>
                        <input type = "hidden" id = 'refId'>
                        <input type="hidden" id = 'ans'>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <!--<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>-->
                        <span id = 'editFooter' class = 'pull-left' style="margin-left: 20px"></span>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->

    </div><!-- /#surveyModal1 -->

<script type="text/javascript">

function rate(id)
{
	console.log("The id is : "+id);
	$('#refId').val(id);
}

	$(document).ready(function(){

		$('#referenceTable').DataTable({
	      "paging": true,
	      "lengthChange": true,
	      "searching": true,
	      "ordering": true,
	      "info": true,
	      
	    });

		$('.rateit').on('click', function(){
        
                   
                   
                   var id = $(this).attr('id');     
                   var answer = $(this).rateit('value')*10;
                   console.log("Answer is : "+answer);
                   $('#ans').val(answer);
                   var id = $('#refId').val();
                   $.ajax({
                   	  url : 'saveRating.php?rating='+answer+'&id='+id,
                   	  type : 'GET',
                   	  success : function(data)
                   	  {
                   	  		var response = JSON.parse(data);
								if(response.error)
								{
										
										var content = "<div class = 'callout callout-danger col-md-12'><center>"+response.message+"</center></div>";
										$('#editFooter').html(content);					
										setTimeout(function() {
				   							 $('#editFooter').fadeOut('fast');
				   							 $('#editModal').modal("hide");
										}, 1000);
										
										
								}
								else
								{
										
										var content = "<div class = 'callout callout-success col-md-12'><center>"+response.message+"</center></div>";	
										$('#editFooter').html(content);					
										
										setTimeout(function() {
				   							 $('#editFooter').fadeOut('fast');
				   							 $('#editModal').modal("hide");
										}, 1000);
										
								}

								// refresh the page
								setTimeout(function(){
								$.ajax({

									url : 'recievedReferences.php',
									type : 'GET',
									beforeSend : function()
									{
										NProgress.start();
									},
									success : function(data)
									{
										$('.content').html(data);
									},
									error : function(er)
									{
										alert("Error");
									},
									complete : function()
									{
										NProgress.done();
									}

								});		
							}, 1200);
                   	  }	,
                   	  error : function(err)
                   	  {
                   	  	alert("There was an error in rating");
                   	  }
                   });	

           });

	});
</script>    