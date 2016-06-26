$(document).ready(function(){
	
	// disable right click , open this after development mode
	/*$(document).bind('contextmenu', function (e) {
        e.preventDefault();
    });*/

	NProgress.configure({ parent: '.content' });
	
	$('#adminIndustryLI').on('click', function(){

		
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

	});

	$('#adminSentGoodiesLI').on('click', function(){

		
		$.ajax({

			url : 'adminGoodiesSent.php',
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

	});



	$('#customersLI').on('click', function(){

		
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
			error : function(er)
			{
				alert("Error");
			},
			complete : function()
			{
				NProgress.done();
			}

		});

	});

	$('#adminGoodiesLI').on('click', function(){

		
		$.ajax({

			url : 'adminGoodiesCreate.php',
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

	});

	$('#adminRecievedGoodiesLI').on('click', function(){

		
		$.ajax({

			url : 'adminGoodiesRecieved.php',
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

	});

	


	$('#sentReferences').on('click', function(){

		
		$.ajax({

			url : 'sentReferences.php',
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

	});

	

	$('#adminUserHCLI').on('click', function(){

		
		$.ajax({

			url : 'customersOfUser.php',
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

	});


	$('#allCustomersLI').on('click', function(){

		
		$.ajax({

			url : 'admin/allHappyCustomers.php',
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

	});

	$('#allMembersLI , #allMembers').on('click', function(){

		
		$.ajax({

			url : 'allMembers.php',
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

	});

	$('#recieved , #allReferences').on('click', function(){

		
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

	});

	$('#postReference').on('click', function(){

		
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

	});


	$('#goodiesLI').on('click', function(){

		
		$.ajax({

			url : 'goodies.php',
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

	});

	

	$('#recievedGoodiesLI, #allGoodies').on('click', function(){

		
		$.ajax({

			url : 'recievedGoodies.php',
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

	});

	

});  // document.ready ends

