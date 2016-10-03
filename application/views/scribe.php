<?php if($error != false): ?>
	<div class="alert alert-danger"><?= html_escape($error) ?></div>
<?php endif; ?>
<?php if($success != false): ?>
	<div class="alert alert-success"><?= html_escape($success) ?></div>
<?php endif; ?>

<?= form_open('/mailinglist/'.$scribe, 'class="form-horizontal"'); ?>
<div class="form-group">
	<label class="col-sm-2">e-mail*</label>
	<div class="col-sm-10">
		<input type="email" required autofocus placeholder="e-mail" class="form-control" name="email" value="<?= html_escape($email) ?>" />
	</div>
</div>
<div class="form-group">
	<div class="col-xs-6 col-xs-offset-6 col-ms-4 col-ms-offset-8">
		<input type="submit" class="col-xs-12 btn btn-default" value="<?= $scribe ?>" />
	</div>
</div>
<?= form_close(); ?>

