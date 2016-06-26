$(document).ready(function(){

    

    $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
    });

    $("input, textarea").on('focus', function(){
      $("input, textarea").css('border','1px solid #d2d6de');
      $('span[id*="Error"]').html("");
    });


    $('#memberTable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      
    });

    $('#member').on('ifChecked', function(){
        $('#memberTableDiv').show();
    });

	$('#customers, #rmb').on('ifChecked', function(){
        $('#memberTableDiv').hide();
    });    

  $('#submitGoodie').on('click', function(){

    var description = $('#description').val();
    if($.trim(description).length > 0)
    {
        var frm = $('#goodiesForm');

        $.ajax({
          url : 'sendGoodies.php',
          type : 'POST',
          data : frm.serialize(),
          beforeSend : function()
          {
            NProgress.start();
          },
          success : function(data)
          {
              console.log("Data recieved is : "+data);
              var response = JSON.parse(data);
              if(response.error)
              {
                
                var content = "<div class = 'callout callout-danger col-md-6 col-md-offset-3'><center>"+response.message+"</center></div>";
                $('#message').html(content);          
                setTimeout(function() {
                     $('#message').fadeOut('fast');
                }, 1000);
                $('#description').val("");
                $('#validity').val("");
              }
              else
              {
                
                var content = "<div class = 'callout callout-success col-md-6 col-md-offset-3'><center>"+response.message+"</center></div>";  
                $('#message').html(content);          
                
                setTimeout(function() {
                     $('#message').fadeOut('fast');
                }, 1000);
                $('#description').val("");
                $('#validity').val("");
              }

              // refreshing the page
            setTimeout(function(){
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
            },1000);
   
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
    }
    else
    {
      $('#descriptionError').html("* Required");
      $('#description').css("border","1px dashed red");
    }


  });

});

