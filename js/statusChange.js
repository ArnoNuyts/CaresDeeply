$(document).ready( function() {
	
	var opts = {
	  lines: 4, // The number of lines to draw
	  length: 2, // The length of each line
	  width: 10, // The line thickness
	  radius: 30, // The radius of the inner circle
	  corners: 1, // Corner roundness (0..1)
	  rotate: 0, // The rotation offset
	  direction: 1, // 1: clockwise, -1: counterclockwise
	  color: '#000', // #rgb or #rrggbb or array of colors
	  speed: 1, // Rounds per second
	  trail: 60, // Afterglow percentage
	  shadow: false, // Whether to render a shadow
	  hwaccel: false, // Whether to use hardware acceleration
	  className: 'spinner', // The CSS class to assign to the spinner
	  zIndex: 2e9, // The z-index (defaults to 2000000000)
	  top: 'auto', // Top position relative to parent in px
	  left: 'auto' // Left position relative to parent in px
	};

	
	$('.status').each(function() {
		elem = $(this);
		elem.change( function() {
			elem = $(this);
			$.ajax({
			type:'POST',
			url: elem.parent().attr('action')+'/json',
			data:elem.parent().serialize(),
			success: function(response) {
				console.log('%s', response);

				if(response.indexOf('Status successfully changed') >= 0) {
					elem.after(' <span class="fa fa-check" style="color: green"></span>');
				} else {
					elem.after( '<span class="fa fa-times-circle" style="color: red"></span>');
				}
				
				elem.removeAttr('disabled');
				elem.parent().find('#spinner').remove();
			},
			beforeSend: function() {
				elem.attr('disabled','disabled');
				elem.after(' <span id="spinner"></spin>');
				new Spinner(opts).spin($("#spinner"));
				if(elem.parent().find('.fa') != null) {
					elem.parent().find('.fa').remove();
				}
			},
			error: function() {
				alert('Status update failed');
				elem.removeAttr('disabled');
				elem.parent().find('#spinner').remove();
				elem.after(' <span class="fa fa-smile-o" style="color: red"></span>');
			}
		});
		});
	});
	
});	