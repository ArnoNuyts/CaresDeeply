<?php
	header("Content-Type: text/calendar; charset=utf-8");
	header("Content-Disposition: inline; filename=".$event -> id.".ics");
?>BEGIN:VCALENDAR
PRODID:-//Cares Deeply//Arno//EN
VERSION:2.0
CALSCALE:GREGORIAN
BEGIN:VEVENT
DTSTART:<?= gmdate('Ymd\THis\Z', strtotime($event-> date . ' '. $event -> from)) ?>

<?php if(strtotime($event-> date . ' '. $event -> from) > strtotime($event-> date . ' '. $event -> till)): ?>
DTEND:<?= gmdate('Ymd\THis\Z', strtotime(($event-> date . ' '. $event -> till . ' + 1 days'))) ?>
<?php else: ?>
DTEND:<?= gmdate('Ymd\THis\Z', strtotime(($event-> date . ' '. $event -> till))) ?>
<?php endif ?>

DTSTAMP:<?= gmdate('Ymd\THis\Z' ) ?>

UID:<?= $event -> id ?>@caresdeeply.be
CLASS:PRIVATE
<?php if($event -> canceled == TRUE): ?>
DESCRIPTION:Canceled
<?php else: ?>
DESCRIPTION:<?= $event -> name ?>\n\n<?= str_replace("\r", '', str_replace("\n",' ', $event -> lineup)) ?>\nPrice: <?= $event -> price=="0"?"FREE":"€".$event -> price ?> <?= $event -> ticket?'\nTickets: €'.$event -> ticketPrice:"" ?><?= $event -> priceChange?'\nPrice after '.$event -> priceChangeTime .": €".$event -> priceChangePrice:"" ?><?= $event -> freeToilet?'\nFree Toilets':'' ?>\n\nhttp://www.caresdeeply.be/events/show/<?= $event -> id ?>

<?php endif ?>
LOCATION:<?= $event -> checkYourNetwork?'Check Your Network ':''?><?= $event -> venueName ?> - <?= str_replace("\r", '', str_replace("\n",'\, ', str_replace(',', '\,', $event -> venueAddress))) ?>

STATUS:CONFIRMED
SUMMARY:<?= $event -> name ?>

TRANSP:OPAQUE
END:VEVENT
END:VCALENDAR
