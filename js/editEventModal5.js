var baseurl = $('meta[name=url]').attr('content');
var loadedEditExternal = false;

$(document).ready(function() {

	$('.modal-edit').each(function() {

		$(this).click( function() {
			a = $(this);

			if(a.attr('href').indexOf('/edit/') >= 0)
				$('#modal .modal-header .modal-title').html('Edit event');
			else
				$('#modal .modal-header .modal-title').html('Create new event');

			$('#modal .modal-body').html('Loading event form');

			$('#modal').modal('show');

			$.ajax({url: a.attr('href')+'/ajax', success: function(responseText) {

				$('#modal .modal-footer').html('<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button><button class="btn btn-primary" onclick="javascript:$(\'#eventForm\').submit()">Save</button>');
				$('#modal .modal-body').html(responseText);
				$('#modal .modal-body .form-actions').css('display', 'none');

				if(loadedEditExternal == false) {

					$("<link/>", {
						rel: "stylesheet",
						type: "text/css",
						href: baseurl+"/css/eventForm2.css"
					}).appendTo("head");

					$("<link/>", {
						rel: "stylesheet",
						type: "text/css",
						href: "https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css"
					}).appendTo("head");

					$.ajaxSetup({
						cache: true
					});
					$.getScript('https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js').done(function() {
						$.getScript(baseurl+'/js/formStuff3.js').done(function () {
							$.getScript(baseurl+'/js/eventForm4.js');
						});
					});
					loadedEditExternal = true;
				} else {
					setTimeout(function(){	doFormstuffOnLoad();
						doOnLoad();}, 360);
				}
			}});
			return false;
		});
	});
});
