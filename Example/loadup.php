<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Waper\Waper;

$waper = new Waper('https://twitter.com');
$img = $waper->fetch();

var_dump($img);