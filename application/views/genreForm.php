<?php if($genre): ?>
	<h2>Edit genre</h2>
<?php else: ?>
	<h2>Add a genre</h2>
<?php endif; ?>
<?php if(isset($errors) && is_array($errors) && count($errors) > 0): ?>
	<ul class='errors'>
		<?php foreach($errors as $err): ?>
			<li><?= html_escape($err) ?></li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>
<?= form_open('genres/save', 'class="form-vertical" id="eventForm" method="post"') ?>
	<?php if($genre): ?>
		<input type='hidden' name='id' value='<?= $genre -> id ?>' />
	<?php endif; ?>

		<div class="col-sm-5">
			<input class="form-control" type='text' autofocus id='name' required name='name' value='<?php if($genre) echo html_escape($genre -> name) ?>' />
		</div>
		<div class="col-sm-3">
			<input class="form-control btn btn-default" type='submit' value='Save' />
		</div>
</form>
