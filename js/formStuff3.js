/*console.log('undefined');
console.log('%o', MapTool)*/
function MapTool() {};

MapTool.mapMarker = null;
MapTool.map = null;
MapTool.cancel = 0;

MapTool.removeTabForMapElements = function() {
	$('#editMap, #editMap a, #editMap img.leaflet-marker-icon').each(function() {
		$(this).attr('tabIndex', -1);
	});
};

MapTool.onMapClick = function(e) {

	setTimeout(function() {

		if(MapTool.cancel != 0) {
			MapTool.cancel--;

		} else {

			MapTool.setMarker(e.latlng);

			$('#venueLatitude').val(e.latlng.lat);
			$('#venueLongitude').val(e.latlng.lng);
			$('#latitude').val(e.latlng.lat);
			$('#longitude').val(e.latlng.lng);
			MapTool.setZoomValue();

		}

	}, 150);

};

MapTool.destroy = function() {
	if(typeof MapTool.map  !== 'undefined' && MapTool.map != null) {
		console.log('Reset MapTool');
		MapTool.map.remove();
		MapTool.mapMarker = null;
		MapTool.map = null;
		MapTool.cancel = 0;
	}
}

MapTool.setMarker = function (latlng) {

	if(MapTool.mapMarker != null) {
		MapTool.mapMarker.setLatLng(latlng);
	} else {
		MapTool.mapMarker = L.marker(latlng).addTo(MapTool.map);
		MapTool.removeTabForMapElements();
	}
}

MapTool.cancelClick = function(e) {
	MapTool.cancel = 2;
	setTimeout(function() {
		MapTool.cancel = 0;
	}, 350);
}

MapTool.setZoomValue = function(e) {
	$('#venueZoom').val(MapTool.map.getZoom());
	$('#zoom').val(MapTool.map.getZoom());
}

$(document).ready(doFormstuffOnLoad);

function doFormstuffOnLoad() {

	console.log('Start function doFormstuffOnLoad');

	console.log('Url Trick');
	//Cool trick that adds http:// to every url-input field and removes it if the field is kept empty
	$('input[type=url]').each(function() {

		$(this).blur( function() {
			if($(this).val() == 'http://') {
				$(this).val('');
				$(this).blur();
			}
		});

		$(this).focus( function() {
			if($(this).val() == '')
			$(this).val('http://');
		});
	});

	console.log('Tooltip');

	$("form *[title]").attr('data-placement', 'top');
	$("form *[title]").attr('data-container', 'body');
	$("#modal form *[title]").attr('data-container', '#modal');
	$("form *[title]").tooltip();
	$("form input:focus").tooltip('show');

	console.log('Do map stuff');

	try {

		MapTool.destroy();
		MapTool.map = L.map('editMap', {scrollWheelZoom:false});
		MapTool.map.setView([50.8480, 4.3632], 12);
		MapTool.map.invalidateSize();
		
		//L.tileLayer.grayscale('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {}).addTo(MapTool.map);
		L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {}).addTo(MapTool.map);

		MapTool.map.on('click', MapTool.onMapClick);
		MapTool.map.on('dblclick', MapTool.cancelClick);
		MapTool.map.on('zoomend', MapTool.setZoomValue);
		MapTool.removeTabForMapElements();

	} catch(e) {
		console.log('Map stuff failed in formStuff.js: %o', e);
	}
}
