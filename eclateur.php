<?php

var_dump($argv[1]);

$data = strtolower($argv[1]);
strtolower($data);
var_dump($data);

foreach (count_chars($data, 1) as $i => $val) {
    echo "" , chr($i) , " => $val"  . PHP_EOL;
 }

?>

