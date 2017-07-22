$(document).ready(function () 
{
	$("#input-form").validate(
	{              
    	focusInvalid: false,
        onkeyup: false,
        onfocusout: false,
        errorElement: "div",

        errorPlacement: function(error, element) 
        {
         	error.appendTo("div#errors");
        }, 
        rules: 
        {
            "phone": 
            {
                required: true,
                number: true
            },
            "email":
            {
                required: true,
                email: true,
                remote: 
                {
                    url: "check_email.php",
                    type: "post"
                }
            }
        },
        messages:
        {
            "phone": 
            {
                required: "You must enter your phone number",
                number : "Phone number must contain digits only"
            },
            "email": 
            {
                required: "You must enter your email",
                email: "Email not valid",
                remote: "Email already exists"
            }
     	},

        submitHandler: function(form)
        {
        	var firstname = $('#firstname').val();
			var lastname = $('#lastname').val();
			var middlename = $('#middlename').val();
			var phone = $('#phone').val();
			var email = $('#email').val();
            $( "#modal" ).dialog({
                modal: true
            });

       		$.ajax(
			{
				type:"post",
				url:"send_post.php?p=add",
				data:"&firstname="+firstname+"&lastname="+lastname+"&middlename="+middlename+"&phone="+phone+"&email="+email,
				success:function(msg)
				{
					$("#name").html(firstname);
        			$("#modal").dialog('open');
        		}
			});
        }
    });
});
