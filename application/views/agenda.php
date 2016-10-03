<div class="row">
<?php $this -> load -> view('calendar', array("events" => $eventsNow)); ?>
<div class="agenda col-md-8 col-md-pull-4 col-sm-7 col-lg-9 col-lg-pull-3 col-sm-pull-5">
  <?php if(isset($year) && isset($month)): ?>
    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" id="dropdownData" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <?= date('Y M', strtotime("$year-$month-01")) ?>
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownData">
        <?php
        $time = strtotime('first day of this month');
        while(strtotime('2016-01-01') < $time):
        ?>
        <li><a href="<?= base_url('events/archive/'.date('Y', $time).'/'.date('m', $time)) ?>"><?= date('Y M', $time) ?></a></li>
        <?php
        $time = strtotime('- 1 month', $time);
        endwhile;
        ?>
      </ul>
    </div>
  <?php endif; ?>
  <?php foreach ($events as $e): ?>
    <?php if(isset($prevE) AND $prevE -> date != $e -> date): ?>
      </div>
    <?php endif; ?>
    <?php if(!isset($prevE) OR $prevE -> date != $e -> date): ?>
      <div class="date">
        <a class="date" name='<?= $e -> date ?>'><?= date('l d.m.Y', strtotime($e -> date)) ?></a>
        <a href="#top" class='top'>top</a>
      </div><div class='events'>
    <?php endif; ?>
    <div class='event'>
        <?php $this -> load -> view('eventDetails', array("event" => $e)); ?>
    </div>
    <?php $prevE = $e; ?>
  <?php endforeach; ?>
</div>
</div>
</div>
