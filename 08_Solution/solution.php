<?php

function umrechnen($einheit, $wert) {
    if ($einheit == "r") {
        $bogenmass = $wert * (180/M_PI);
        echo "<h2>Der Wert von $wert in rad (Radiant) entspricht $bogenmass Grad in Bogenmass.</h2>\n";
    } elseif ($einheit == "b") {
        $radiant = $wert * (M_PI/180);
        echo "<h2>Der Wert von $wert Grad in Bogenmass entspricht $radiant in rad (Radiant).</h2>\n";
    } else {
        echo "Ungültige Einheit.<br />\n";
    }
}


umrechnen("r", 3.14);
umrechnen("r", M_PI);
umrechnen("b", 359);
umrechnen("b", 360);
umrechnen("b", 180);
?>


