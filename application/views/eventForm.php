<div id="venues" style="display:none;">
	<? foreach($venues as $v): ?>
		<venue>
			<id><?= html_escape($v -> id) ?></id>
			<name><?= html_escape($v -> name) ?></name>
			<address><?= html_escape($v -> address) ?></address>
			<latitude><?= html_escape($v -> latitude) ?></latitude>
			<longitude><?= html_escape($v -> longitude) ?></longitude>
			<website><?= html_escape($v -> website) ?></website>
			<zoom><?= html_escape($v -> zoom) ?></zoom>
		</venue>
	<?php endforeach; ?>
</div>
<script>
	var genres = [<?php foreach($genres as $g) {$name = str_replace('\'','\\\'', $g ->name); echo "'$name',";} ?>];
</script>

<? if($method == 'html'): ?>
	<? if(!empty($event -> id)): ?>
		<h2>Edit an event</h2>
	<?php else: ?>
		<h2>Add an event</h2>
	<? endif; ?>
<? endif; ?>
<?
	if(!empty($event -> id))
 		$url = '/events/edit/'.$event -> id.'/'.$event -> editCode;
 	else
		$url = '/events/add';
?>
<?= form_open($url, 'class="form-horizontal" id="eventForm" method="post" role="form"') ?>
<fieldset>
	<?php

	if($posted OR !empty($event -> id)) {
		echo '<input type="hidden" name="validate" id="validate" value="true" />';
	}
	?>
	<legend>Event</legend>
	<?= form_error('name'); ?>
	<div class='form-group has-feedback'>
		<label class="col-sm-3 control-label" for="name">Eventname*</label>
		<div class="col-sm-9">
			<input id="name" name="name" type="text" value="<?= html_escape($event -> name) ?>" required data-toggle="tooltip" class="form-control" autofocus title="Don't use the name of your dog." />
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>

	<?= form_error('date'); ?>
	<div class='form-group has-feedback'>
		<label class="col-sm-3 control-label" for="date">Date*</label>
		<div class="col-sm-4" id="date">
			<div class="input-group date" style="display: table;">
				<input name="date" class="form-control" title="Like: dd/mm/yyyy" min=""<?=date('Y-m-d') ?>"" pattern="([0-9]|[0-2][0-9]|3[0-1])([-]|[/])([0-9]|0[0-9]|1[0-2])([-]|[/])20[0-9]{2}" type="text" placeholder='dd/mm/yyyy' required value='<?= empty($event -> date)?'':date('d/m/Y', strtotime(str_replace('/','-',$event -> date))) ?>' />
				<span class="glyphicon form-control-feedback" aria-hidden="true" style="right:37px;"></span>
				<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
			</div>
		</div>
	</div>
	<?= form_error('from'); ?>
	<div class='form-group has-feedback'>
		<label class="col-sm-3 control-label" for="from">Starting time*</label>
		<div class="col-sm-4">
			<input name="from" class="form-control" title='hh:mm' pattern="([0-9]|0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9])" type="time"  required placeholder='22:00' value="<?= html_escape(substr($event -> from, 0, 5)) ?>" />
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
	<?= form_error('till'); ?>
	<div class='form-group has-feedback'>
		<label class="col-sm-3 control-label" for="till">Finish</label>
		<div class="col-sm-4">
			<input name="till" class="form-control" title="hh:mm" type="time" pattern="([0-9]|0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9])" placeholder='5:00' value="<?= html_escape(substr($event -> till, 0, 5)) ?>" />
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
	<?= form_error('type'); ?>
	<div class='form-group has-feedback'>
		<label class="col-sm-3 control-label" for="type">Type</label>
		<div class="col-sm-4">
			<select class="form-control" required name="type" title="What are you organising?">
				<option value="" disabled selected>Select a type</option>
				<?php foreach(['Party', 'Concert','People\'s kitchen', 'Record Market', 'Market', 'Protest','Festival' ] as $type): ?>
					<option <?= $type==$event->type?'selected':''; ?> value='<?= html_escape($type) ?>'><?= html_escape($type) ?></option>
				<?php endforeach; ?>
			</select>
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
	<?= form_error('lineup'); ?>
	<div class='form-group has-feedback'>
		<label class="col-sm-3 control-label" for="lineup">Line-up*</label>
		<div class="col-sm-9">
			<textarea maxlength="420" name="lineup" class="form-control" title="Fill it out like: name[COUNTRY],... No layouts! We are not facebook." rows="5" required placeholder="Guru[US], Jam Master Jay[US], MCA[US], Gregory Isaacs[JAM], Isaac Hayes[US], George Duke[US], Dave Brubeck[US], Ron Hardy[US], Larry Levan[US], Jim Morrisson[US], Miles Davis[US], Michael Jackson[US], Bob Marley[JAM] , Ella Fitzgerald[US], Count Basie[US], Otis Redding[US], Miriam Makeba[SA], Fela Kuti[NIG], DJ Mehdi[FR], Lolo Ferari[US]"><?= html_escape($event -> lineup) ?></textarea>
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
	<?= form_error('genre'); ?>
	<div id="genre-form-group" class='form-group has-feedback'>
		<label class="col-sm-3 control-label" for="genre">Genres</label>
		<div class='col-sm-9'>
			<input name="genre" id="genre" data-role="tagsinput" class="form-control"  title="Funky Jazzy Hiphop" type="text" value="<?= html_escape(str_replace(', ',',',$event -> genre)) ?>" />
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div>
	</div>
		<?= form_error('website'); ?>
		<div class='form-group has-feedback'>
			<label class="col-sm-3 control-label" for="website">Website</label>
			<div class="col-sm-9">
				<input name="website" class="form-control"  title="Website is internet and internet is virtual. Has to start with http:// or https://	" type="url"  placeholder='http://www.boups.com' value="<?= html_escape($event -> website) ?>" />
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			</div>
		</div>
		<?= form_error('flyer'); ?>
		<div class='form-group has-feedback'>
			<label class="col-sm-3 control-label" for="flyer">Flyer-url</label>
			<div class="col-sm-9">
				<input name="flyer" class="form-control"  title='A direct link to your flyer. Should end with .png, .jpg, .jpeg, .tif or .tiff' pattern="https?://.+(\.png|\.jpg|\.jpeg|\.gif|\.tif|\.tiff){1}" type="url"  placeholder='http://www.images.com/blabla.png' value="<?= html_escape($event -> flyer) ?>" />
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			</div>
		</div>
		<?= form_error('facebook'); ?>
		<div class='form-group has-feedback'>
			<label class="col-sm-3 control-label" for="facebook">Facebook-page</label>
			<div class="col-sm-9">
				<input name="facebook" class="form-control"  pattern="https?://www.facebook.com/.+" type="url"  id="facebook" title="Look behind you, maybe you're followed" placeholder='https://www.facebook.com/events/123456789/' value="<?= html_escape($event -> facebook) ?>" />
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			</div>
		</div>
		<?= form_error('freeToilet'); ?>
		<div class='form-group has-feedback'>
			<label class="col-xs-6 col-sm-3 control-label" for="freeToilet">Free Toilets</label>
			<div class="col-xs-6 col-sm-6">
				<input name="freeToilet" class="form-control" title="Free pee" type="checkbox"  <?= $event -> freeToilet?'checked':'' ?> />
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			</div>
		</div>
		<?= form_error('volontaryContribution'); ?>
		<div class='form-group has-feedback'>
			<label class="col-xs-6 col-sm-3 control-label" for="volontaryContribution">Free Contribution</label>
			<div class="col-xs-6 col-sm-6">
				<input name="volontaryContribution" class="form-control" data-hide="#pricing" title="Goed gedaan manneke" type="checkbox"  <?= $event -> volontaryContribution?'checked':'' ?> />
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			</div>
		</div>
		<div id="pricing" <?= $event -> volontaryContribution?'style="display:none;"':'' ?>>
			<?= form_error('price'); ?>
			<div class='form-group has-feedback'>
				<label class="col-sm-3 control-label" for="price">Price*</label>
				<div class="col-sm-4">
					<div class="input-group">
						<span class="input-group-addon">€</span>
						<input name="price" lang="nb" class="form-control" pattern="\d+([\.,]{1}\d{1,2})?" step="any" title="Braque ta banque et brule le fric" type="number" required min="0" placeholder="0,00" value="<?= html_escape($event -> price) ?>" />
					</div>
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				</div>
			</div>
			<?= form_error('priceChange'); ?>
			<div class='form-group has-feedback'>
				<label  class="col-xs-6 col-sm-3 control-label" for="priceChange">Price change</label>
				<div class="col-xs-6 col-sm-6">
					<input name="priceChange" data-show="#priceChange" class="form-control" title="Inflation contribuation" type="checkbox" <?= $event -> priceChange?'checked':'' ?> />
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				</div>
			</div>
			<div id='priceChange' class="well col-sm-offset-2" <?= !$event -> priceChange?'style="display:none;"':'' ?>>

					<?= form_error('priceChangeTime'); ?>
					<div class='form-group has-feedback'>
						<label class="col-sm-6 control-label" for="priceChangeTime">After*</label>
						<div class="col-sm-6">
							<input name="priceChangeTime" class="form-control" title="hh:mm" type="time" required pattern="([0-9]|0[0-9]|1[0-9]|2[0-3])(:[0-5][0-9])"  placeholder='00:00' value="<?= html_escape($event -> priceChangeTime) ?>" />
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
						</div>
					</div>

					<?= form_error('priceChangePrice'); ?>
					<div class='form-group has-feedback'>
						<label class="col-sm-6 control-label" for="priceChangePrice">New price*</label>
						<div class="col-sm-6">
							<div class="input-group">
								<span class="input-group-addon">€</span>
								<input name="priceChangePrice" class="form-control" pattern="\d+([\.,]{1}\d{1,2})?" step="any" lang="nb" required title="The price after the change" type="number" min="0"  placeholder='1,00' value="<?= html_escape($event -> priceChangePrice) ?>" />
							</div>
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
						</div>
					</div>

			</div>
			<?= form_error('ticket'); ?>
			<div class='form-group has-feedback'>
				<label class="col-xs-6 col-sm-3 control-label" for="ticket">Tickets</label>
				<div class="col-xs-6 col-sm-6">
					<input name="ticket" data-show="#ticket" class="form-control" title="Send us free tickets OR you will die." type="checkbox" <?= $event -> ticket?'checked':'' ?> />
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				</div>
			</div>
		</div>
		<div id="ticket" class="well col-sm-offset-2" <?= !$event -> ticket?'style="display:none;"':'' ?>>
			<?= form_error('ticketPrice'); ?>
			<div class='form-group has-feedback'>
				<label class="col-sm-6 control-label" for="ticketPrice">Ticket price*</label>
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">€</span>
						<input name="ticketPrice" class="form-control" pattern="\d+([\.,]{1}\d{1,2})?"  step="any" lang="nb" title="Presales prices" type="number" min="0"  placeholder="1,00" required value="<?= html_escape($event -> ticketPrice) ?>" />
					</div>
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				</div>
			</div>
			<?= form_error('ticketWebsite'); ?>
			<div class='form-group has-feedback'>
				<label class="col-sm-6 control-label" for="ticketWebsite">Online ticket-sales</label>
				<div class="col-sm-6">
					<input name="ticketWebsite" class="form-control" title='A website for ticket-sales' pattern="https?://.+" type="url"  placeholder='http://www.2dehands.be' value="<?= html_escape($event -> ticketWebsite) ?>" />
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				</div>
			</div>
			<?= form_error('ticketOffline'); ?>
			<div class='form-group has-feedback'>
				<label class="col-sm-6 control-label" for="ticketOffline">Offline ticket-sales</label>
				<div class="col-sm-6">
					<textarea name="ticketOffline" class="form-control" title='Where can I get some tickets?' rows="3"><?= html_escape($event -> ticketOffline) ?></textarea>
					<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
				</div>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<legend>Venue</legend>
		<?= form_error('checkYourNetwork'); ?>
		<div class='form-group has-feedback'>
			<label class="col-xs-6 col-sm-3 control-label" for="checkYourNetwork">Check Your Network</label>
			<div class="col-xs-6 col-sm-6">
				<input name="checkYourNetwork" class="form-control" data-hide="#location" title="Undisclosed location" type="checkbox"  <?= $event -> checkYourNetwork?'checked':'' ?> />
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			</div>
		</div>
		<div id="location" <?= $event -> checkYourNetwork?'style="display:none"':'' ?>>
		<?= form_error('knownVenues'); ?>
		<div class='form-group'>
			<label class="col-sm-3 control-label" for="knownVenues">Known venues</label>
			<div class="col-sm-6">
				<select class="form-control" name="knownVenues" id="knownVenues" title='Will autofill the venue-data'>
					<option value="" disabled selected>Select a venue</option>
					<?php foreach($venues as $v): ?>
						<option value='<?= html_escape($v -> id) ?>'><?= html_escape($v -> name) ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>
		<?= form_error('venueName'); ?>
		<div class='form-group has-feedback'>
			<label class="col-sm-3 control-label" for="venueName">Location name*</label>
			<div class="col-sm-9">
				<input type="text" name="venueName" id="venueName" required placeholder="Pol's Jazz Club" title="Don't fill in the name of your best friends sisters cat" class="form-control" value="<?= html_escape($event -> venueName) ?>" />
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			</div>
		</div>
		<?= form_error('venueAddress'); ?>
		<div class='form-group has-feedback'>
			<label class="col-sm-3 control-label" for="venueAddress">Address*</label>
			<div class="col-sm-9">
				<textarea name="venueAddress" class="form-control" id="venueAddress" title="Example:&#10;street street-nr&#10;postalcode city." rows="3" required placeholder="Rue de la Loi 54, 1000 BXL"><?= html_escape($event -> venueAddress) ?></textarea>
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			</div>
		</div>
		<?= form_error('venueWebsite'); ?>
		<div class='form-group has-feedback'>
			<label class="col-sm-3 control-label" for="venueWebsite">Website</label>
			<div class="col-sm-6">
				<input name="venueWebsite" class="form-control" type="url" id="venueWebsite" pattern="https?://.+" title="Website or facebook of the venue" placeholder='http://www.venue.be' value="<?= html_escape($event -> venueWebsite) ?>" />
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			</div>
		</div>
		<div class='form-group'>
			<div class="col-sm-6 col-sm-push-3">
				<input class="btn search-btn" type="button" id="searchAddress" value="View address on map" />

			</div>
		</div>
		<input name="venueLatitude" type="hidden" id="venueLatitude" value="<?= html_escape($event -> venueLatitude) ?>" />
		<input name="venueLongitude" type="hidden" id="venueLongitude"  value="<?= html_escape($event -> venueLongitude) ?>" />
		<input name="venueZoom" type="hidden" id="venueZoom"  value="<?= html_escape($event -> venueZoom) ?>" />

		<em>Put a location-marker on the map: </em><br />

		<div id="editMap" style='height: 280px;' tabindex="-1"></div>
	</div>
	</fieldset>
	<fieldset>
		<legend>Contact info</legend>
		<?= form_error('username'); ?>
		<div class='form-group has-feedback'>
			<label class="col-sm-3 control-label" for="email">E-mail*</label>
			<div class="col-sm-9">
				<input name="email" class="form-control" type="email" title='Will not be shared with third parties.' id="email"  value="<?= html_escape($event -> email) ?>" required placeholder='me@myself.i' />
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<legend>Canceling</legend>
		<div class='form-group has-feedback'>
			<label class="col-xs-6 col-sm-3 control-label" for="canceled">Canceled</label>
			<div class="col-xs-6 col-sm-6">
				<input name="canceled" class="form-control" title="Good luck next time" type="checkbox" <?= $event -> canceled?'checked':'' ?> />
				<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			</div>
		</div>
		<div class="form-actions">
			<div class="col-sm-3 col-sm-push-9">
				<input class="form-control" type="submit" value="Save" class='btn btn-default' />
			</div>
		</div>
	</fieldset>
</form>
