<table class="table table-striped">
    <tbody>
		<?php if(count($events) == 0): ?>
			<tr><td colspan="3">No events found in this category</td></tr>
		<?php endif; ?>
<?php foreach ($events as $e): ?>
	<?php if(!isset($prevE) OR $prevE -> date != $e -> date): ?>
		<tr><td colspan='4' class='date'><?= date('l d-m-Y', strtotime($e -> date)) ?></td></tr>
	<?php endif; ?>
<tr>
	<td><?= $e -> name ?></td>
	<td><?= form_open('events/changeStatus', 'class="inline-form"'); ?><?= form_hidden('id', $e -> id); ?><?= form_dropdown('status', $stati, $e -> status, 'class="status form-control" style="max-width: 80%; display: inline-block"'); ?><noscript><input type='submit' value='save' /></noscript><?= form_close(); ?></td>
	<td><a class='modal-view' title="View event <?= html_escape($e -> name) ?>" href='<?= base_url("events/show/{$e -> id}") ?>'><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> view</a> &nbsp; <a class="modal-edit" title='Edit <?= html_escape($e -> name) ?>' href='<?= base_url("events/edit/{$e -> id}/{$e -> editCode}") ?>'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> edit</a></td>
</tr>
	<?php $prevE = $e; ?>
<?php endforeach; ?>
 </tbody>
</table>
