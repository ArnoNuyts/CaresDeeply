$(document).ready(function() {
	
	$('.confirm').each(function() {
		$(this).click(function(e) {
			e.preventDefault();
			if (window.confirm("Are you sure?")) {
				location.href = this.href;
			}
		});
	});

});