<?php

header('Content-Type: image/gif');

function choice($arr) {
	return $arr[random_int(0, count($arr) - 1)];
}

$urls = array(
	'img/foo.jpg',
	'img/baz.jpg',
	'img/u.png'
);

$c = choice($urls);
$fp = fopen($c, 'rb');

echo fread($fp, filesize($c));

fclose($fp);