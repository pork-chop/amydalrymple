$(function() {
	$('.error').hide();

	var form = $('#contactform');
	
    $(form).submit(function(e) {
		// validate and process form
		e.preventDefault();

		var formData = $(form).serialize();			
// 		console.log (formData);

// 		$(".button").click(function() {
// 		  // validate and process form here
// 
// 		  $('.error').hide();
// 		  var name = $("input#txt-name").val();
// 			if (name == "") {
// 				$("label#name_error").show();
// 				$("input#name").focus();
// 				return false;
// 		  }
// 			var email = $("input#txt-email").val();
// 			if (email == "") {
// 				$("label#email_error").show();
// 				$("input#email").focus();
// 				return false;
// 		  }
// 			var message = $("textarea#more-info").val();
// 			if (message == "") {
// 				$("label#message_error").show();
// 				$("textarea#more-info").focus();
// 				return false;
// 		  }
// 
// 		});
  				
		$.ajax({
			type: "POST",
			url: $(form).attr('action'),
			data: formData,
			success: function() {
				$(form).prepend("<div id='message'></div>");
				$('#message').html("<p><strong>Contact Form Submitted!</strong></p><p>Thank you for your note.</p>");

				// Clear the form.
// 				$('#txt-name').val('');
// 				$('#txt-email').val('');
// 				$('#more-info').val('');
			}
		});
		
		return false;

    });
});