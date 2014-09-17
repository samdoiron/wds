$(function () {
	// delegate calls to data-toggle="lightbox"
	$('*[data-toggle="lightbox"]').click(function(event) {
		event.preventDefault();
		return $(this).ekkoLightbox({
			always_show_close: true
		});
	});
});