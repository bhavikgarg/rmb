// function for only number input

// usage : onkeypress="return isNumber(event)"

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

// this function returns true if mail is valid email , else return false

function validateEmail(mail)
{
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if(filter.test(mail))
    {
        return true;
    }
    else{
        return false;
    }
}

function checkEmpty(data)
{
	if($.trim(data).length > 0)
	{
		return true;
	}
	else
	{
		return false;
	}
}

// contact no validation for length 
function checkLength(data)
{
	if($.trim(data).length > 0)
	{
		
	}
}