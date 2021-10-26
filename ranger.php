<?php

var_dump($argv);
$numberInArray = (count($argv));
var_dump($numberInArray);

$items = array ();

for ($i=1; $i < $numberInArray; $i++) {
    
    array_push($items,$argv[$i]);
}

var_dump($items);
sort($items);
var_dump($items);

$json = json_encode($items);
$create = file_put_contents("contenu.json", $json); 

// $json2 = json_decode($items);
// var_dump($json2);
// $json2 = (json_decode($json));
// rsort($json2);
// var_dump($json2);

?>