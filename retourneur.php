<?php
// var_dump($argv);

$numberInArray = (count($argv));

$items = array ();
$reverseArray = array();

for ($i=1; $i < $numberInArray; $i++) {
    
    array_push($items,$argv[$i]);
    // var_dump($items[$i-1]);
    $reverse = strrev($items[$i-1]);
    // var_dump($reverse);
    array_push($reverseArray,$reverse);
}

// var_dump($reverseArray);
$comma_separated = implode(" ", $reverseArray);
// var_dump($comma_separated);
$line = readline($comma_separated);
?>