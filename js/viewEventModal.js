var loadedViewExternal = false;

$(document).ready(function() {
	$('#modal').on('hide.bs.modal', function (e) {
		console.log('Reset MapTool');
		if(typeof map !== 'undefined') {
			map.remove();

		}
	});
	$('.modal-view').each(function() {

		$(this).click( function() {
			a = $(this);

			$('#modal .modal-header .modal-title').html('View event');

			$('#modal .modal-body').html('Loading event');

			$('#modal').modal('show');

			$.ajax({url: a.attr('href')+'/ajax', success: function(responseText) {

				$('#modal .modal-footer').html('<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>');

				$('#modal .modal-body').html(responseText);

				if(loadedViewExternal == false) {

					$("<link/>", {
						rel: "stylesheet",
						type: "text/css",
						href: "https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css"
					}).appendTo("head");
					$.ajaxSetup({
					  cache: true
					});


					$.getScript('https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js').done(function() {
						//console.log(makeEventMap);
						if(makeEventMap != undefined)
							makeEventMap();
					});

					loadedViewExternal = true;
				} else {
					makeEventMap();
				}
			}});

			return false;
		});
	});


});
