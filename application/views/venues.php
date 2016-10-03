<table id='venues' class="table table-striped" style='min-width: 300px;'>

<?php foreach ($venues as $v): ?>

	<tr>
		<td class='name'><?= html_escape($v -> name) ?></td>
		<td>
			<a title='Edit <?= html_escape($v -> name) ?>' href='<?= base_url("venues/edit/{$v -> id}") ?>'><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> edit</a>
			&nbsp;
			<a class='confirm delete' href='<?= base_url("venues/delete/{$v -> id}") ?>'><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> delete</a>

		</td>
	</tr>


<?php endforeach; ?>
</table>
