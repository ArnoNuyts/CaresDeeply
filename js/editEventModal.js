//var editModal = null;

$(document).ready(function() {

	var loadedEditExternal = false;

	$('.modal-edit').each(function() {

		$(this).click( function() {
			a = $(this);

			if(a.attr('href').indexOf('/edit/') >= 0)
				$('#modal .modal-header .modal-title').html('Edit event');
			else
				$('#modal .modal-header .modal-title').html('Create new event');

			$('#modal .modal-body').html('Loading event form');

			$('#modal').modal('show');
			$('#modal').on('hide.bs.modal', function (e) {
				console.log('Reset MapTool');
				if(typeof MapTool.map  !== 'undefined' && MapTool.map != null) {
					MapTool.map.remove();
					MapTool.mapMarker = null;
					MapTool.map = null;
					MapTool.cancel = 0;
				}
			});
			//editModal.setFooter('<input onclick="javascript:submitEvent(this)" class="btn btn-primary" type="button" value="Save" /> <input class="btn" onclick="javascript:cancelEditEvent(this)" type="button" value="Cancel" />');

			$.ajax({url: a.attr('href')+'/ajax', success: function(responseText) {
				console.log($('#modal .modal-body').html());

				$('#modal .modal-footer').html('<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button><button class="btn btn-primary" onclick="javascript: submitEvent()">Save</button>');

				$('#modal .modal-body').html(responseText);

				$('#modal .modal-body .form-actions').css('display', 'none');

				if(loadedEditExternal == false) {

					$("<link/>", {
						rel: "stylesheet",
						type: "text/css",
						href: "/css/eventForm.css"
					}).appendTo("head");

					$("<link/>", {
						rel: "stylesheet",
						type: "text/css",
						href: "//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css"
					}).appendTo("head");

					$.ajaxSetup({
						cache: true
					});
					$.getScript('//cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.js').done(function() {
						$.getScript('/js/formStuff.js').done(function () {
							$.getScript('/js/eventForm.js');
						});
					});
					loadedEditExternal = true;
				} else {
					doFormstuffOnLoad();
					doOnLoad();
				}
			}});

			return false;
		});
	});
});

function submitEvent() {
	console.log('Submit Event %s', $('eventForm').action);
	elem = $('this');
	$.ajax({
		type:'POST',
		url: $('#eventForm').attr('action')+'/ajax',
		data: $('#eventForm').serialize(),
		success: function(responseText) {
			if(responseText.indexOf('Successfully') >=0 || responseText.indexOf('Submitted') >= 0) {
				$('#modal .modal-footer').html('<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>');
			}
			$('#modal .modal-body').html(responseText);
			$('#modal .modal-body .form-actions').css('display', 'none');
			doFormstuffOnLoad();
			doOnLoad();
		},
		beforeSend: function() {
			elem.attr('disabled','disabled');
			$('#modal .modal-body').html('<img src="/img/waiting.gif" />');
		},
		error: function() {
			alert('Submitting the form failed. Please check your internet connection and retry.');
			elem.removeAttr('disabled');
		}
	});
}
