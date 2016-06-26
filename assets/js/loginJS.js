$(document).ready(function(){
	
	// NProgress.configure({ parent: 'body' });

	$("input, textarea, select").on('focus', function(){
		$("input, textarea, select").css('border','1px solid #d2d6de');
		$('span[id*="Error"]').html("");
		$('#errorMsg').html("");
	})

	$('#loginFRM').on('submit', function(event){

		event.preventDefault();

		// $(this).html('<i class = "fa fa-spinner fa-spin"></i> Signing In');

		var username = $('#username').val();
		var password = $('#password').val();

		if($.trim(username).length > 0)
		{
			if($.trim(password).length > 0)
			{
				// send to server if both are filled
				console.log($(this).serialize());
				$.ajax({

					url : 'controller/loginController.php',
					type : 'POST',	
					data : $(this).serialize(),
					success : function(data)
					{
						console.log(data);
						
						if(data === '0')
						{
							var message = "<div class = 'alert alert-danger col-sm-8 col-sm-offset-2'>Invalid Credentials</div>";
							$('#errorMsg').html(message);	
						}
						else
						{
							var message = "<div class = 'alert alert-success col-sm-8 col-sm-offset-2'>Login Successful..Redirecting</div>";
							$('#errorMsg').html(message);
							
							// if admin
							if(data === '1'){
								setTimeout(function(){
									window.location = "admin/admin.php";
								}, 1000);	
							}
							else if(data === '3'){
								setTimeout(function(){
									window.location = "home.php";
								}, 1000);
							}
							/**/
						}

					},
					error : function(data)
					{
							var message = "<div class = 'callout callout-danger'>Internal Server error.. try again</div>";
							$('#errorMsg').html(message);
					}

				});

			}
			else
			{
				$('#password').css("border","1px dashed red");
				$('#passwordError').html("* Required");
			}
		}
		else
		{
			$('#username').css("border","1px dashed red");
			$('#usernameError').html('* Required');
		}
		
		

	});

});