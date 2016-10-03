<ul class="nav nav-tabs hidden-xs">
	<?php foreach($links as $title => $url): ?>
		<li<?= isset($selected)&&$selected==$title?' class="active"':'';?>><a href='<?=$url ?>'><?=html_escape($title) ?></a></li>
	<?php endforeach; ?>
</ul>
<div class="visible-xs dropdown">
	<button class="btn btn-default dropdown-toggle" type="button" id="dropdownSub" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    <?= !isset($selected)||$selected==''?'Menu':html_escape($selected);?>
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownSub">
	<?php foreach($links as $title => $url): ?><li<?= isset($selected)&&$selected==$title?' class="active"':'';?>><a href='<?=$url ?>'><?=html_escape($title) ?></a></li><?php endforeach; ?>
  </ul>
</div>&nbsp;
