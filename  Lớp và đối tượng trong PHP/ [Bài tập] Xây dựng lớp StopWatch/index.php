<?php
include_once("Stop-Watch.php");
$watch = new StopWatch();
$arr = [];
for ($i = 1; $i <= 100000; $i++) {
    $arr[] = $i;
}
rsort($arr);
$watch->stop();
echo $watch->getElapsedTime();
echo "<br>";
echo microtime(true);