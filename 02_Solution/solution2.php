
<?php


// Eine rekursive PHP-Funktion, die den GGT zweier Zahlen bestimmt
function ggt($a, $b) {
    if ($b == 0) {
        return $a;
    } else {
        return ggt($b, $a % $b);
    }
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