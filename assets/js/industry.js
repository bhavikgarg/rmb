$(document).ready(function(){

	// empty the error field when textField is focussed
	$('#industry').on('focus', function(){
		$('#industryError').html("");
	});

	// add a new industry
	$('#add').on('click', function(){

		var c = $('#industry').val();
		console.log("Class is : "+c);
		if(c.length > 0)
		{
			console.log("in condition");
			var frm = $('#newForm');
			$.ajax({

				url : 'industryProcess.php',
				type : 'POST',
				data : frm.serialize(),
				beforeSend : function()
				{
					NProgress.start();
				},
				success : function(data)
				{
					// getting JSON response fron server
					console.log("Data recieved is : "+data);
					var response = JSON.parse(data);
					if(response.error)
					{
						
						var content = "<div class = 'callout callout-danger col-md-6 col-md-offset-3'><center>"+response.message+"</center></div>";
						$('#message').html(content);					
						setTimeout(function() {
   							 $('#message').fadeOut('fast');
						}, 1000);
						$('#industry').val("");
						
					}
					else
					{
						
						var content = "<div class = 'callout callout-success col-md-6 col-md-offset-3'><center>"+response.message+"</center></div>";	
						$('#message').html(content);					
						
						setTimeout(function() {
   							 $('#message').fadeOut('fast');
						}, 1000);
						$('#industry').val("");
					}

					// refreshing the page
				setTimeout(function(){
					$.ajax({

						url : 'adminIndustry.php',
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
				},1000);
	

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
		}
	    else
	    {
	    	console.log("in else");
	    	$('#industryError').html("* Required");
	    }
	});

	// update class after edit
	$('#saveEdited').on('click', function(){
		var id = $('#gradeID').val();
		var className = $('#gradeEdit').val();
		if(className.length > 0)
		{


		$.ajax({
			url : '../adminModule/process/classAction.php?action=edit&id='+id+'&className='+className,
			type : 'GET',
			beforeSend : function()
			{
				NProgress.start();
				NProgress.set(0.4);
			},
			success : function(data)
			{
				console.log(data);
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

						url : '../adminModule/manageClass.php',
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
			},
			error : function(err)
			{
				$('#editFooter').html("Internal Server Error...");
				setTimeout(function(){
					$('#editModal').modal("hide");
				}, 1000);
			},
			complete : function()
			{
				NProgress.done();
			}
		});
		}
		else
		{
			$('#gradeEditError').html("* Required");
		}
	});



});   // document.ready ends 

$(function () {
    $('#classTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      
    });
});

// class actions

function activate(classID)
{
	console.log("ID to activate : "+classID);
	$.ajax({
		url : '../adminModule/process/classAction.php?action=true&id='+classID,
		type : 'GET',
		beforeSend : function()
		{
			NProgress.start();
			NProgress.set(0.4);
		},
		success : function(data)
		{
				console.log(data);
					var response = JSON.parse(data);
					if(response.error)
					{
						
						var content = "<div class = 'callout callout-danger col-md-6 col-md-offset-3'><center>"+response.message+"</center></div>";
						$('#message').html(content);					
						setTimeout(function() {
   							 $('#message').fadeOut('fast');
						}, 1000);
						
						
					}
					else
					{
						
						var content = "<div class = 'callout callout-success col-md-6 col-md-offset-3'><center>"+response.message+"</center></div>";	
						$('#message').html(content);					
						
						setTimeout(function() {
   							 $('#message').fadeOut('fast');
						}, 1000);
						
					}

					// refreshing the page
					setTimeout(function(){
					$.ajax({

						url : '../adminModule/manageClass.php',
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
				}, 1000);
		},
		error : function(data)
		{
			alert("Internal server error..Try later");
		},
		complete : function()
		{
			NProgress.done();
		}
	});
}

function inactivate(classID)
{
	console.log("ID to inactivate : "+classID);
	$.ajax({
		url : '../adminModule/process/classAction.php?action=false&id='+classID,
		type : 'GET',
		beforeSend : function()
		{
			NProgress.start();
			NProgress.set(0.4);
		},
		success : function(data)
		{
			console.log(data);
					var response = JSON.parse(data);
					if(response.error)
					{
						
						var content = "<div class = 'callout callout-danger col-md-6 col-md-offset-3'><center>"+response.message+"</center></div>";
						$('#message').html(content);					
						setTimeout(function() {
   							 $('#message').fadeOut('fast');
						}, 1000);
						
						
					}
					else
					{
						
						var content = "<div class = 'callout callout-success col-md-6 col-md-offset-3'><center>"+response.message+"</center></div>";	
						$('#message').html(content);					
						
						setTimeout(function() {
   							 $('#message').fadeOut('fast');
						}, 1000);
						
					}

					// refreshing the page
				setTimeout(function(){
					$.ajax({

						url : '../adminModule/manageClass.php',
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
				}, 1000);
		},
		error : function(data)
		{
			alert("Internal server error..Try later");
		},
		complete : function()
		{
			NProgress.done();
		}
	});
}

function deleteClass(classID)
{
	console.log("ID to delete : "+classID);
	$.ajax({
		url : '../adminModule/process/classAction.php?action=del&id='+classID,
		type : 'GET',
		beforeSend : function()
		{
			NProgress.start();
			NProgress.set(0.4);
		},
		success : function(data)
		{
			console.log(data);
					var response = JSON.parse(data);
					if(response.error)
					{
						
						var content = "<div class = 'callout callout-danger col-md-6 col-md-offset-3'><center>"+response.message+"</center></div>";
						$('#message').html(content);					
						setTimeout(function() {
   							 $('#message').fadeOut('fast');
						}, 1000);
						
						
					}
					else
					{
						
						var content = "<div class = 'callout callout-success col-md-6 col-md-offset-3'><center>"+response.message+"</center></div>";	
						$('#message').html(content);					
						
						setTimeout(function() {
   							 $('#message').fadeOut('fast');
						}, 1000);
						
					}

					// refreshing the page
				setTimeout(function(){
					$.ajax({

						url : '../adminModule/manageClass.php',
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
				}, 1000);
		},
		error : function(data)
		{
			alert("Internal server error..Try later");
		},
		complete : function()
		{
			NProgress.done();
		}
	});
}

function editClass(classID, className)
{
	console.log("ID to edit : "+classID+" name : "+className);
	$('#gradeID').val(classID);
	$('#gradeEdit').val(className);
}