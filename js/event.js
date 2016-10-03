$(document).ready( function() {
	var map = L.map('map',{scrollWheelZoom:false}).setView([<?= $event -> venueLatitude ?>, <?= $event -> venueLongitude ?>], <?= $event -> venueZoom ?>);

	L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {}).addTo(map);

	L.marker([<?= $event -> venueLatitude ?>, <?= $event -> venueLongitude ?>]).addTo(map)
	.bindPopup('<?= $event -> venueName ?>')
	.openPopup();
});
