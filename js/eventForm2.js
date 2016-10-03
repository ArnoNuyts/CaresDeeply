$(document).ready(doOnLoad);
function doOnLoad() {
	console.log('Start function doOnLoad');

	console.log('Loading venues array');
	// load venues from html
	var venues = [];
	$('#venues venue').each( function() {
		v = $(this);
		venues.push(
			{
				id: v.find('id').html(),
				name: v.find('name').html(),
				latitude: v.find('latitude').html(),
				longitude: v.find('longitude').html(),
				website: v.find('website').html(),
				zoom: v.find('zoom').html(),
				address: v.find('address').html()
			}
		);
	});

	console.log('Setting knowVenues onChange function');

	$('#knownVenues').change( function() {

		$.each(venues, function(i, venue) {
			//console.log('%o', venue);
			if(venue.id == $('#knownVenues').val()) {
				$('#venueName').val(venue.name);
				$('#venueAddress').val(venue.address);
				$('#venueLatitude').val(venue.latitude);
				$('#venueLongitude').val(venue.longitude);
				$('#venueWebsite').val(venue.website);
				$('#venueZoom').val(venue.zoom);

				MapTool.setMarker([venue.latitude, venue.longitude]);
				MapTool.map.setView([venue.latitude, venue.longitude], venue.zoom, {animate: true});

			}
		});
	});

	console.log('Setting date onBlur function');

	$('date').blur( function() {

		var today = new Date();
		var party = new Date($('date').val());
		if(today.diff(party)<0) {

			$('date').setCustomValidity('The party needs to be in the future!');
		} else {
			// input is valid -- reset the error message
			$('date').setCustomValidity('');
		}

	});

	console.log('Setting marker + map view if #venueLatitude and #venueLongitude are defined');

	if($('#venueLatitude').val() != '' && $('#venueLongitude').val() !='' && $('#venueZoom').val() != '' && MapTool != null) {
		console.log('%o', MapTool);
		console.log('%s %s',$('#venueLatitude').val(), $('#venueLongitude').val());
		MapTool.setMarker([$('#venueLatitude').val(), $('#venueLongitude').val()]);
		MapTool.map.setView([$('#venueLatitude').val(), $('#venueLongitude').val()], $('#venueZoom').val(), {animate: false});
	}

	console.log('Set searchAddress onClick function');
	$('#searchAddress').click( function() {
		console.log('Search Address: '+$('#venueAddress').val());
		$.getJSON('https://nominatim.openstreetmap.org/search?format=json&q='+$('#venueAddress').val(), function(r){
			if(r.length == 0)
				alert('Adress not found on MapTool.map.');
			else {
				if(MapTool != null) {
					MapTool.setMarker([r[0].lat, r[0].lon]);
					MapTool.map.setView([r[0].lat, r[0].lon], 16, {animate: true});
				}

				$('#venueLatitude').val(r[0].lat);
				$('#venueLongitude').val(r[0].lon);
				$('#venueZoom').val(16);
			}

		});
		return false;
	});
}
//https://github.com/kasparsj/jquery-data-show-hide + data-init enhancement
(function($) {
    'use strict';
    $(document.body)
        .on("change", "input[data-show]", function() {
            var $this = $(this),
                $showEl = getDataElement($this, "show");
            if ($showEl)
                $showEl[$this.is(":checked") ? "show" : "hide"]();
        })
        .on("change", "input[data-hide]", function() {
            var $this = $(this),
                $hideEl = getDataElement($this, "hide");
            if ($hideEl)
                $hideEl[$this.is(":checked") ? "hide" : "show"]();
        })
        .on("change", "input[data-toggle]", function() {
            var $this = $(this),
                $toggleEl = getDataElement($this, "toggle");
            if ($toggleEl)
                $toggleEl.toggle();
        })

    function getDataElement($input, prop) {
        var selector = $input.data(prop);
        if (typeof selector == "string") {
            return $(selector);
        }
    }

})(jQuery);
