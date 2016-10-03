
<table class="table table-striped">

	<?php if(count($genres) == 0): ?>
		<tr><td colspan="3">No genres found</td></tr>
	<?php endif; ?>

	<?php foreach ($genres as $g): ?>
		<tr>
			<td><?= html_escape($g -> name) ?></td>
			<td>
				<a title="Edit <?= html_escape($g -> name) ?>" href="<?= base_url("genres/edit/{$g -> id}") ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> edit</a>
				&nbsp;
				<a title="Delete <?= html_escape($g -> name) ?>" class='confirm' href="<?= base_url("genres/delete/{$g -> id}") ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> delete</a>
			</td>
		</tr>
	<?php endforeach; ?>

</table>
