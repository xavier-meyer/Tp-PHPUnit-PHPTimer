<?php

use SebastianBergmann\Timer\Timer;

require __DIR__ . '/vendor/autoload.php';
$timer = new Timer();
$timer->start();

// your code

$time = $timer->stop();

var_dump($time);

print $time->asString();