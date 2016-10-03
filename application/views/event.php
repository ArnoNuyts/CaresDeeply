<?php if($method == 'html'): ?>
<div class="row">
	<span class="hidden-xs">
		<?php $this -> load -> view('calendar', array("events" => $events)); ?>
	</span>
	<div class="col-md-8 col-md-pull-4 col-sm-7 col-lg-9 col-lg-pull-3 col-sm-pull-5">
<?php endif; ?>
		<div class="date">
			<a class="date" name='<?= $event -> date ?>'><?= date('l d-m-Y', strtotime($event -> date)) ?></a>
		</div>
		<div class="events">
			<div class='event'>
				<?php $this -> load -> view('eventDetails', array("event" => $event)); ?>
				<?php if(!empty($event -> venueLongitude) && !empty($event -> venueLatitude) && !empty($event -> venueZoom)): ?>
					 <script>
						document.addEventListener("DOMContentLoaded", function(event) {
							makeEventMap();
						});
						function makeEventMap() {
							if(typeof  L !== 'undefined') {
								var map = L.map('map',{scrollWheelZoom:false}).setView([<?= $event -> venueLatitude ?>, <?= $event -> venueLongitude ?>], <?= $event -> venueZoom ?>);

								L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
								    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a>'
								}).addTo(map);

								L.marker([<?= $event -> venueLatitude ?>, <?= $event -> venueLongitude ?>]).addTo(map)
								.bindPopup('<?= $event -> venueName ?>')
								.openPopup();
							}
						}
					 </script>
					<div id="map" style='height: 280px;'></div>
					<a class="mapslink" href="https://maps.google.com/maps?daddr=<?= $event -> venueAddress ?>">Get travel directions (google maps)</a>
				<?php endif; ?>
		</div>
	</div>
<?php if($method == 'html'): ?>
</div>
<?php endif; ?>
