
				        
						<div class="box box-info">
						    <div class="box-header with-border">
						        <h3 class="box-title">Happy Customer List of Users</h3>
						        <button id = 'viewCustomer' class = 'btn btn-info pull-right'>View Customers</button>
						        <button id = 'back' class = 'btn btn-info pull-right' style = 'display : none'>Back</button>
						    </div><!-- /.box-header -->
						    <!-- form start -->
						    <form class="form-horizontal" id = 'goodiesForm'>
						      <div class="box-body">
						      <br><br>
						        
							<div id = 'groupDiv'>				
								<div class="form-group">
						          <label for="description" class="col-sm-4 control-label">Select a Group </label>
						          <div class="col-sm-5">
						              <select class = 'form-control groupSelect' name = 'group' id = 'group' onchange = "loadMembers(this.value)">
						              <!-- to be filled in dynamically -->
						              </select>
						              <span class = 'help-block' style = 'color : red' id = 'memberError'></span>
						          </div>
						          
						        </div>
								
							<div class="row">
								<div id = 'memberTableDiv' style = "display : none" class = "col-md-10 col-md-offset-1">

									<table class="table table-bordered table-striped" id = 'memberTable'>
										<thead>
											<tr>
												<th></th>
												<th>Member Name</th>
												<th>Email ID</th>
											</tr>
										</thead>
										<tbody id = "t">
										</tbody>
									</table>


									</div>				
								</div>			
						    </div>

						    <div id = 'customerDiv' style = "display : none">
						    	<div class="row">
									<div class = "col-md-10 col-md-offset-1">

										<table class="table table-bordered table-striped" id = 'memberTable1'>
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
											<tbody id = "t1">
											</tbody>
										</table>


									</div>				
								</div>			
						    </div>    
								
						    </form>
						</div>

					


<!-- including the js files -->

<script type = "text/javascript">

$(document).ready(function(){

	$('#memberTable , #memberTable1').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      
    });

	// get all members from all groups
	$.ajax({
		url : 'getAllGroups.php',
		type : 'GET',
		success : function(data)
		{
			var responseObj = JSON.parse(data);
	        var selectField = $('.groupSelect');
	        selectField.empty();
	        var options = "<option value = '-1'>-- Select Group -- </option>";
	        $.each(responseObj, function(key, obj){
	          options += "<option value = '"+obj.name+"'>"+obj.name+"</option>";
	        });
	        selectField.append(options);
		},
		error : function(err)
		{
			alert("Unable to fetch group data");
		}
	});

	$('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
    });

    $('#back').on('click', function(){
    		$('#groupDiv').show();
			$('#customerDiv').hide();
			$(this).hide();
			$('#viewCustomer').show();
    });

	$('#viewCustomer').on('click', function(){

		var value = $("input[name='selectMember']:checked").val();
		console.log("Value is"+value);
		if($.trim(value).length > 0)
		{
			$.ajax({
				url : 'getCustomersOfMember.php?name='+value,
				type : 'GET',
				success : function(data)
				{
					$('#t1').empty();
      				$('#t1').html(data);				
				},
				error : function(err)
				{
					alert("Error in getting customer details");
				}
			});

			$('#groupDiv').hide();
			$('#customerDiv').show();
			$(this).hide();
			$('#back').show();

		}
		else
		{
			alert("Please select a member");
		}
	});

});

function loadMembers(value)
{
  $('#memberTableDiv').show();
  $.ajax({
    url : 'getMembersOfGroup.php?name='+value,
    type : 'GET',
    success : function(data)
    {
      console.log("The data obtained is : "+data);
      $('tbody').empty();
      $('#t').html(data);
    },
    error : function(err)
    {
      alert("Error in getting member details");
    }
  });
}




</script>



