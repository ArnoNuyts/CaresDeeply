<?php if(count($menu) > 0): ?>
<div class="container" style="height:0;position:absolute;left:0; width: 100%;">
<div class="row">
<nav class="navbar navbar-default col-sm-12"  style="width: 100%;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
			<a class="navbar-brand" href="#">Admin</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
				<?php foreach($menu as $item): ?>
					<?php if(isset($item['menu'])): ?>
						<li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= html_escape($item['name']);?> <span class="caret"></span></a>
		          <ul class="dropdown-menu">
								<?php foreach($item['menu'] as $item): ?>
		            	<li><a title="<?= html_escape($item['name'])?>" href="<?= base_url($item['url']) ?>"><?= html_escape($item['name']);?></a></li>
		            <?php endforeach;?>
		          </ul>
		        </li>
					<?php else: ?>
						<li><a title="<?= html_escape($item['name'])?>" href="<?= base_url($item['url']) ?>"><?= html_escape($item['name']);?></a></li>
					<?php endif ?>
				<?php endforeach;?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
</div>
<?php endif; ?>
