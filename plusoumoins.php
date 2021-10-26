<?php
var_dump($argv);

$min = $argv[1];

$max = $argv[2];

$vies = $argv[3];

$myNumber = (rand($min,$max)) . PHP_EOL;

var_dump($myNumber);

for ($i=0; $i < $vies; $i++) {
    $line = readline("Commande : ");
    readline_add_history($line);

    echo($line);
    
    if ($line < $myNumber) {
        echo "Le chiffre est plus grand" . PHP_EOL;
    }
    if ($line > $myNumber) {
        echo "Le chiffre est moins grand" . PHP_EOL;      
    }
    if ($line == $myNumber) {
        echo "Vous avez trouvé le chiffre exact" . PHP_EOL;
        die();
    }
}


?>