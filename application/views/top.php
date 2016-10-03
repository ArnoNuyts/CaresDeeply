<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Cares Deeply :: quality - selection / democatic - festivities / brussels</title>
	<meta property="og:url" name="url" content="<?= base_url() ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?= html_escape($fb_title) ?>" />
	<meta name="keywords" content="Events, Party, Concerts, Fetivals, Nightlife, Brussels, Bruxelles, Brussel, Belgium, Agenda, Selection, Festivities, Calendar" />
	<meta name="description" property="og:description" content="<?= html_escape($fb_description) ?>" />
	<meta property="og:image" content="<?= html_escape($fb_img) ?>" />
<?php foreach($css as $c): ?>
	<link crossorigin="anonymous" rel="stylesheet<?php if(substr($c, -4) == 'less') echo '/less' ?>" media="screen" href="<?= strpos($c, '//') === FALSE? base_url("css/$c"):$c; ?>" />
<?php endforeach; ?>
</head>
<body>
<div class='container'>
<div class='row' id='header'>
	<h1 class='col-sm-12'><a href="<?= base_url() ?>"><img alt="Cares Deeply" width="547" height="85" src="<?= base_url('img/logo.svg') ?>"></a></h1>
</div>
<?php if(isset($title) && !empty($title)): ?>
	<h1><?= html_escape($title) ?></h1>
<?php endif; ?>
<?php if(isset($message) && !empty($message)): ?>
	<div class="alert alert-<?= html_escape($message_type)?>" role="alert"><?= html_escape($message) ?></div>
<?php endif; ?>
