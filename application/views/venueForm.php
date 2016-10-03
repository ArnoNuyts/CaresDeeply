<?php if($venue): ?>
	<h2>Edit venue</h2>
<?php else: ?>
	<h2>Add a venue</h2>
<?php endif; ?>
<?php if(isset($errors) && is_array($errors) && count($errors) > 0): ?>
	<ul class='errors'>
		<?php foreach($errors as $err): ?>
			<li><?= html_escape($err) ?></li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>

<?= form_open('venues/save', 'class="form-horizontal" method="post"') ?>
	<?php if($venue): ?>
		<input type='hidden' name='id' value='<?= $venue -> id ?>' />
	<?php endif; ?>

	<div class='form-group'>
		<label class="col-sm-3 col-md-2 control-label">Location name*</label>
		<div class="col-sm-5">
			<input class="form-control" type='text' id='name' required name='name' value='<?php if($venue) echo html_escape($venue -> name) ?>' />
		</div>
	</div>
	<div class='form-group'>
		<label class="col-sm-3 col-md-2 control-label">Address*</label>
		<div class="col-sm-5">
			<textarea  class="form-control" rows="3" name='address' required id='address'><?php if($venue) echo html_escape($venue -> address) ?></textarea>
		</div>
		<div class="col-sm-4">
			<input class="form-control btn" type='button' id='searchAddress' value='View address on map' />
		</div>
	</div>
	<div class='form-group'>
		<label class="col-sm-3 col-md-2 control-label">Website</label>
		<div class="col-sm-5">
			<input class="form-control" type='url' name='website' id='website' pattern="https?://.+" placeholder='http://www.venue.be' value='<?php if($venue) echo html_escape($venue -> website); ?>' />
		</div>
	</div>

	<div>
		<input type='hidden' id='latitude' name='latitude' value='<?php if($venue) echo html_escape($venue -> latitude) ?>' />
		<input type='hidden' id='longitude' name='longitude' value='<?php if($venue) echo html_escape($venue -> longitude) ?>' />
		<input type='hidden' id='zoom' name='zoom' value='<?php if($venue) echo html_escape($venue -> zoom) ?>' />
	</div>
	<div class='form-group'>
		<div class="col-sm-12">
			<em>Put a location-marker on the map: </em><br />
			<div id="editMap" class="form-control" style='height: 280px;' tabindex="-1"></div>
		</div>
	</div>
	<div class="col-sm-3 col-sm-offset-9">
		<input class="form-control btn btn-default novalidate" type='submit' value='Save' />
	</div>
</form>
