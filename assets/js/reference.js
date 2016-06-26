$(document).ready(function(){

	$('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
    });


	$.ajax({
		url : 'getCategory.php',
		type : 'GET',
		success : function(data)
		{
			console.log(data);
			var responseObj = JSON.parse(data);
			var selectField = $('.categorySelect');
			selectField.empty();
			var options = "<option value = '-1'>-- Select Category -- </option>";
			$.each(responseObj, function(key, obj){
				options += "<option value = '"+obj.name+"'>"+obj.name+"</option>";
			});
			selectField.append(options);
		},
		error : function(err)
		{
			alert("Internal Server error");
		}
	});

	$('#referenceForm').on('submit', function(e){

		e.preventDefault();
		$('#message').focus();
		var frm = $('#referenceForm');
		console.log("Form data : "+frm.serialize());
		$.ajax({
			url : 'saveReferences.php',
			type : 'POST',
			data : frm.serialize(),
			beforeSend : function()
			{
				NProgress.start();
			},
			success : function(data)
			{
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

						url : 'postReference.php',
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
			error : function(err)
			{
				alert("Internal Server Error");
			},
			complete : function()
			{
				NProgress.done();
			}
		});

	});


});

function load(category)
{
	$.ajax({
		url : 'getUsers.php?category='+category,
		type : 'GET',
		success : function(data)
		{
			console.log(data);
			$('#tableDiv').html(data);
		},
		error : function(err)
		{
			alert("Internal Server Error");
		}
	});
}