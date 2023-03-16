<?php

// Pfad zur Textdatei
$file = 'text.txt';

// Lese den Inhalt der Textdatei ein
$text = file_get_contents($file);

// Erstelle einen regulären Ausdruck, um Wörter zu erkennen
$pattern = '/\w+/';

// Führe den regulären Ausdruck auf den Text aus und speichere die Ergebnisse in einem Array
preg_match_all($pattern, $text, $words);

// Zähle die Anzahl der Elemente im Array und gib sie aus
echo "<h2>Anzahl der Wörter, die mit einem regulären Ausdruck w+ ermittelt wurden: " . count($words[0]) . ".</h2>\n";
print_r($words[0]);

// Text am Leerzeichen in Wörter zerlegen und in einem Array speichern
$words = explode(' ', $text);

// Anzahl der Wörter ermitteln und ausgeben

echo "<h2>Anzahl der Wörter, die mit einem Zerlegen an einem Leerzeichen ermittelt wurden: " . count($words) . ".</h2>\n";
print_r($words);
?>