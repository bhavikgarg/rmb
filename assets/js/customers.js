$(document).ready(function(){

	 $("input").on('focus', function(){
      $("input, textarea").css('border','1px solid #d2d6de');
      $('span[id*="Error"]').html("");
    });


	$('INPUT[type="file"]').change(function () {
		$('#fileError').html("");
		$('#upload').attr('disabled', true);
		var d = this.value;
		
		var s = d.split('.')[0].split("\\");

		if(s[2] === 'customers' || s[2] === 'customer')
		{
			$('#fileError').html("This file name is not accepted..Please rename file and then upload");
	        this.value = '';
	        $('#upload').attr('disabled', true);
		}
	    var ext = this.value.match(/\.(.+)$/)[1];
	    switch (ext) {
	        
	        case 'xls':
	        case 'xlsx' : 
	        case 'csv' : 
	            $('#upload').attr('disabled', false);
	            break;
	        default:
	            $('#fileError').html("This is not an allowed file type");
	            this.value = '';
	    }
	});

	$('#submitApplication').on('click', function(){
		var name = $('#name').val();
		var email = $('#email').val();
		var contact = $('#contact').val();

		if($.trim(name).length > 0)
		{
			if($.trim(email).length > 0)
			{
				if($.trim(contact).length > 0)
				{
					// send to server
					var frm = $('#goodiesForm');
					$.ajax({
						url : 'saveHappyCustomers.php',
						type : 'POST',
						data : frm.serialize(),
						beforeSend : function()
						{
							NProgress.start();
						},
						success : function(data)
						{
							var obj = JSON.parse(data);
							console.log(obj);
							if(obj.error)
							{
								var content = "<div class = 'callout callout-danger col-md-6 col-md-offset-3'><center>"+obj.message+"</center></div>";
								$('#message').html(content);					
								setTimeout(function() {
									$('#message').fadeOut('fast');
								}, 1000);
																			
							}
							else
							{
								var content = "<div class = 'callout callout-success col-md-6 col-md-offset-3'><center>"+obj.message+"</center></div>";	
								$('#message').html(content);					
								setTimeout(function() {
									$('#message').fadeOut('fast');
								}, 1000);
							}
							setTimeout(function(){


								$.ajax({

									url : 'customers.php',
									type : 'GET',
									beforeSend : function()
									{
										NProgress.start();
									},
									success : function(data)
									{
										$('.content').html(data);
									},
									error : function(err)
									{
										alert("Internal Server error");
									},
									complete : function()
									{
										NProgress.done();
									}

								});
							}, 2000);
						},
						error : function(err)
						{	
							alert('Internal Server error');
						},
						complete : function()
						{
							NProgress.done();
						}

					});
				}	
				else
				{
					$('#contactError').html("* Required");
					$('#contact').css('border','1px dashed red');				
				}
			}
			else
			{
				$('#emailError').html("* Required");
				$('#email').css('border','1px dashed red');		
			}
		}
		else
		{
			$('#nameError').html("* Required");
			$('#name').css('border','1px dashed red');
		}
	});

	$('#fileUploadForm').on('submit', function(e){

		e.preventDefault();
		
		$.ajax({
			url : 'uploadCustomer.php',
			type : 'POST',
			beforeSend : function()
			{
				NProgress.start();
				NProgress.set(0.4);
			},
			data : new FormData(this),
			contentType: false,
    	   	cache: false,
			processData:false,
			success : function(data)
			{
				console.log(data);
				var obj = JSON.parse(data);
				console.log(obj);
				if(obj.error)
				{
					var content = "<div class = 'callout callout-danger col-md-6 col-md-offset-3'><center>"+obj.message+"</center></div>";
					$('#message').html(content);					
					setTimeout(function() {
						$('#message').fadeOut('fast');
					}, 1000);
																
				}
				else
				{
					var content = "<div class = 'callout callout-success col-md-6 col-md-offset-3'><center>"+obj.message+"</center></div>";	
					$('#message').html(content);					
					setTimeout(function() {
						$('#message').fadeOut('fast');
					}, 1000);
				}
				setTimeout(function(){


					$.ajax({

						url : 'customers.php',
						type : 'GET',
						beforeSend : function()
						{
							NProgress.start();
						},
						success : function(data)
						{
							$('.content').html(data);
						},
						error : function(err)
						{
							alert("Internal Server error");
						},
						complete : function()
						{
							NProgress.done();
						}

					});
				}, 2000);
			},
			error : function(err)
			{

			},
			complete : function()
			{
				NProgress.done();
			}
		});
	});

	$('#importExcelBTN').on('click', function(){

		$('#formDiv').css("display","none");
		$('#uploadDiv').css("display","block");

		/*var frm = $('#uploadForm');
		$.ajax({
			url : 'uploadCustomer.php',
			type : 'POST',
			data : new FormData(frm),
			contentType: false,
    	    cache: false,
			processData:false,
			success : function(data)
			{
				console.log(data);
				var obj = JSON.parse(data);
				if(obj.error){
					var content = "<div class = 'callout callout-danger col-md-6 col-md-offset-3'><center>"+obj.message+"</center></div>";
					$('#message').html(content);					
					setTimeout(function() {
						$('#message').fadeOut('fast');
					}, 1000);
				}											
				else
				{
					var content = "<div class = 'callout callout-success col-md-6 col-md-offset-3'><center>"+obj.message+"</center></div>";	
					$('#message').html(content);					
					setTimeout(function() {
						$('#message').fadeOut('fast');
					}, 1000);
				}

				
															
			},
			error : function(err)
			{

			}												
													
		});	*/

	});

	$('#formBTN').on('click', function(){
		$('#formDiv').css("display","block");
		$('#uploadDiv').css("display","none");
	});

});