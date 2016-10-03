<script type="text/javascript">
var events = [
<?php
	$first = true;
	foreach($events as $e) {
		if(!isset($ePrev) OR $prevE -> date != $e -> date) {
			if($first == true)
				$first = false;
			else
				echo ",\n";
			echo "{date: '".date('Y-m-d',strtotime($e -> date))."', title: \"" . html_escape($e -> name) . "\"}";
		}
	}
?>
];
</script>
<div class="col-md-4 col-sm-5 col-lg-3 col-md-push-8 col-lg-push-9 col-sm-push-7" id="clndr-sidebar">
  <div id="mini-clndr"></div>
  <a href="<?= base_url('add') ?>" class="modal-edit btn-btn btn-add col-sm-12">Add event</a>
  <?= form_open('/mailinglist/subscribe', 'id="mailinglistForm"'); ?>
  <input type="email"  placeholder="e-mail" class="col-xs-10 novalidate" required name="email" />
  <input type="submit" class="col-xs-2" value="+" />
  <?= form_close(); ?>
	<div class="row">
		<div class="col-xs-2 col-lg-3">
  		<a target="_blank" href="https://www.facebook.com/caresdeeply/"><img src="<?= base_url('/img/fb_icon.svg'); ?>" height="44px" width="44px" /></a>
		</div>
		<div class="col-xs-10 col-lg-9">
            <a href="<?= base_url('events/archive') ?>" class="btn-btn">Archive</a>
		</div>
	</div>
</div>
