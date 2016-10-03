$(document).ready(doOnLoad);

function doOnLoad() {
	console.log('Start function doOnLoad');
	if($('#latitude').val() != '' && $('#longitude').val() !='' && $('#zoom').val() != '') {
		console.log('%s %s',$('#latitude').val(), $('#longitude').val());
		MapTool.setMarker([$('#latitude').val(), $('#longitude').val()]);

		console.log('%o', MapTool);
		MapTool.map.setView([$('#latitude').val(), $('#longitude').val()], $('#zoom').val(), {animate: false});
	}

	console.log('Set searchAddress onClick function');
		$('#searchAddress').click( function() {
			console.log('Search Address: '+$('#address').val());
			$.getJSON('http://nominatim.openstreetmap.org/search?format=json&q='+$('#address').val(), function(r){
				if(r.length == 0)
					alert('Address not found on the map.');
				else {
					if(typeof MapTool !== 'undefined') {
						MapTool.setMarker([r[0].lat, r[0].lon]);
						MapTool.map.setView([r[0].lat, r[0].lon], 16, {animate: true});
					}

					$('#latitude').val(r[0].lat);
					$('#longitude').val(r[0].lon);
					$('#zoom').val(16);
				}

			});
			return false;
		});
}
