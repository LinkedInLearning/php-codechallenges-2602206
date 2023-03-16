
<?php

// Funktion zur Berechnung des GGT mit einer Schleife
function ggt($a, $b) {
    // Wenn $a kleiner als $b ist, tauschen der Werte
    if ($a < $b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }

    // Berechnung des GGT mit dem Euklidischen Algorithmus
    while ($b != 0) {
        $rest = $a % $b;
        $a = $b;
        $b = $rest;
    }

    return $a;
}


// Beispielwerte in einem Array
$werte = array(12,18,7,87,12,16,32,48,55,15,20);


        
$i = 0;
while ($i < count($werte)-1)
{
    // Ausgabe des GGT
    echo "Der GGT von " . $werte[$i] . " und " . $werte[$i+1] . " ist " .ggt($werte[$i], $werte[$i+1]) . ".<br />\n";

    $i++;
}


?>