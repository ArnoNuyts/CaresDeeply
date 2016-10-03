<?php
function isValidURL($url)
{
	return preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $url);
}

function isValidTime($time) {
	return preg_match('/^(2[0-3]|[01][0-9]|[0-9]):[0-5][0-9]$/', $time);
}

function isValidEmail($email) {
	return preg_match("/^[^@]*@[^@]*\.[^@]*$/", $email);
}

function isValidPrice($price) {
	return preg_match('#^([0-9])+([,][0-9]{1,2})?$#', $price);
}
?>