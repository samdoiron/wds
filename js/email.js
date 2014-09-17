
$(function(){
	$('#email-form').submit(function(evt){
		// Select DOM elements
		form = $(this);

		alert_success = $('.alert-success');
		alert_danger = $('.alert-danger');

		from = form.find('#email');
		subject = form.find('#subject');
		message = form.find('#message');


		// Check for correct email
		if (from.val().match(/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i))
			from.parent().removeClass('has-error');
		else from.parent().addClass('has-error');

		// Check for non-empty subject
		if (subject.val())
			subject.parent().removeClass('has-error');
		else subject.parent().addClass('has-error');

		// Check for non-empty message
		if (message.val())
			message.parent().removeClass('has-error');
		else message.parent().addClass('has-error');

		errors = form.find('.has-error');

		url = this.action;

		// No errors in form, make ajax call to send the email
		if (! errors.length) {
			$.ajax({
				url: "email.php",
				type: "POST",
				data: {subject: subject.val() ,message: message.val(), from: from.val()},
				success: function(response) {
					//Display errors
					if (response.error)
						alert_danger.text(response.error).removeClass('hide');
					else alert_danger.addClass('hide');

					if (response.success) {
						alert_success.text(response.success).removeClass('hide');
						//Reset values in the form
						from.val('');
						subject.val('');
						message.val('');
					}
					else alert_success.addClass('hide');
				}
			});
		}

		// Stops the form from submitting
		return false;
	});
});
