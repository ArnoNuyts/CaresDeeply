<h4><a class="name" href="<?= base_url('events/show/'.$event -> id)  ?>"><?= html_escape($event -> name) ?></a></h4>
<div class="genres"><? if(!empty($event -> type)): ?><span class="type"><?= html_escape($event -> type) ?></span><? endif; ?>
	<?php foreach(explode(',', $event -> genre) as $g):if(!empty(trim($g))): ?>
		<span><?= html_escape(trim($g)) ?></span>
	<?php endif; endforeach; ?>
</div>
<?php if($event -> canceled == TRUE): ?>
	<div class='canceled'>CANCELED</div>
<?php else: ?>
	<div class='pricing'>
		<?php if($event -> freeToilet == TRUE): ?>
			<span class='freeToilet'>FREE TOILETS / </span>
		<?php endif; ?>
		<span class='price'>
            <?php if($event -> volontaryContribution == TRUE): ?>
                Free Contribution
            <?php else: ?>
                <?= $event -> price=="0"?"FREE":"&euro;".html_escape(str_replace(',00','',str_replace('.',',',$event -> price))) ?>
            <?php endif; ?>
			<?= $event -> ticket?" / ticket &euro;".html_escape(str_replace(',00','',str_replace('.',',',$event -> ticketPrice))):'' ?>
			<?= $event -> priceChange?" / after ".html_escape($event -> priceChangeTime) ." &euro;".html_escape(str_replace(',00','',str_replace('.',',',$event -> priceChangePrice))):'' ?>
		</span>
	</div>
	<span class='timing'><?= substr(html_escape($event -> from), 0, 5) ?><?= $event -> till!=''?' - '.substr(html_escape($event -> till), 0, 5):'' ?></span>
<?php endif; ?>

<span class='lineup clearfix'><?= html_escape($event -> lineup) ?></span>

<span class='location clearfix'>
	<?php if($event -> checkYourNetwork == TRUE): ?>
		Check Your Network
	<?php endif; ?>
	<?php if(!empty($event -> venueWebsite)): ?>
		<a class='venueName' href="<?= html_escape($event -> venueWebsite) ?>"><?= html_escape($event -> venueName) ?></a>
	<?php else: ?>
		<span class='venueName'><?= html_escape($event -> venueName) ?></span>
	<?php endif; ?>
	<?php if(!empty($event -> venueAddress)): ?>
		<?= html_escape($event -> venueAddress) ?>
	<?php endif; ?>
</span>
<div class="links">
<?php if(!empty($event -> website)): ?><span class='website'><a target='_blank' href="<?= html_escape($event -> website) ?>">Website</a></span><?php endif; ?>
<?php if(!empty($event -> facebook)): ?><span class='facebook'><a target='_blank' href="<?= html_escape($event -> facebook) ?>">Facebook</a></span><?php endif; ?>
<?php if(!empty($event -> flyer)): ?><span class='flyer'><a target='_blank' href="<?= html_escape($event -> flyer) ?>">Flyer</a></span><?php endif; ?>
<span class='calendar'><a target='_blank' href="<?= base_url()  ?>events/ics/<?= html_escape($event -> id) ?>">iCal</a></span>
</div>
