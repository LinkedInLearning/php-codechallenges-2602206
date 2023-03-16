<?php

// Funktion zum Würfeln
function wuerfeln($param) {
    // Zufällige Zahl zwischen 0 und 1 erzeugen
    $zufall = mt_rand(0, 100) / 100;

    // Wenn die Zufallszahl kleiner als der Parameter ist, wird Kopf gewürfelt, ansonsten Zahl
    if ($zufall < $param) {
        return "Kopf";
    } else {
        return "Zahl";
    }
}

// Funktion zum Prüfen auf Manipulation
function pruefeManipulation($wuerfe) {
    // Anzahl der Kopf- und Zahl-Würfe ermitteln
    $kopf = 0;
    $zahl = 0;

    foreach ($wuerfe as $wurf) {
        if ($wurf == "Kopf") {
            $kopf++;
        } else {
            $zahl++;
        }
    }
    echo "<hr />\nKopf: $kopf, Zahl: $zahl.<hr />\n"; 
    // Erwartete Anzahl der Würfe ermitteln (50% Kopf, 50% Zahl)
    $erwartetKopf = count($wuerfe) * 0.5;
    $erwartetZahl = count($wuerfe) * 0.5;
    echo "<hr />\nErwartete Anzahl Kopf: $erwartetKopf, Erwartete Anzahl Zahl: $erwartetZahl.<hr />\n"; 
    
    // Abweichungen ermitteln und vergleichen mit den Grenzwerten für Verdacht und Warnung 
    $abweichungKopf = abs($kopf - $erwartetKopf);
    $abweichungZahl = abs($zahl - $erwartetZahl);
    echo "<hr />Abweichung Kopf: $abweichungKopf, Abweichung Zahl: $abweichungZahl.<hr />\n"; 
    
    if (round($abweichungKopf / count($wuerfe) * 100, 2)>10) {  // Programm beenden bei mehr als 10% Abweichung 
                echo "<h2>Manipulation wurde festgestellt! Programm wird beendet. Anzahl der Würfe: " . count($wuerfe) . ", Abweichung von erwartetem Wert: " . round($abweichungKopf / count($wuerfe) * 100, 2) . "%.</h2>\n"; 

                exit();  // Programm beenden 
            } 
    else if (round($abweichungKopf / count($wuerfe) * 100, 2)>5) {  // Warnung bei mehr als 5% Abweichung 
                echo "<h2>Warnung: Manipulation wahrscheinlich! Anzahl der Würfe: " . count($wuerfe) . ", Abweichung von erwartetem Wert: " . round($abweichungKopf / count($wuerfe) * 100, 2) . "%.</h2>\n"; 
        }
    else    if (round($abweichungKopf / count($wuerfe) * 100, 2)>2) {  // Verdacht auf Manipulation bei mehr als 2% Abweichung 
            echo "<h2>Verdacht auf Manipulation! Anzahl der Würfe: " . count($wuerfe) . ", Abweichung von erwartetem Wert: " . round($abweichungKopf / count($wuerfe) * 100, 2) . "%.</h2>\n"; 
        }
        
    else {   // Keine Manipulation festgestellt  
        echo "<h1>Keine Manipulation festgestellt. Anzahl der Würfe: " . count($wuerfe) .
         ", Abweichung von erwartetem Wert: " . round($abweichungKopf / count($wuerfe) * 100, 2) . "%.</h2>\n"; ;  
    }  

}  

 // Parameter für die Manipulationsstärke einlesen oder standardmäßig auf 50% (keine Manipulation) setzen  
$manipulation = (isset($argv[1])) ? (floatval($argv[1])/100): 0.5;  

 // Array für die geworfenen Münzen anlegen  
$wuerfe = array();  

 // Mindestanzahl an Würfen: 1000  
while (count($wuerfe) < 1000 ) {  

     // Münze werfen und Ergebnis im Array für die geworfenen Münzen speichern  
     array_push($wuerfe, wuerfeln($manipulation));  


 }  
// print_r($wuerfe); // Testausgabe des Arrays
 // Prüfen ob eine Manipulation vorliegt und ggfs. Meldung ausgeben  
pruefeManipulation($wuerfe);