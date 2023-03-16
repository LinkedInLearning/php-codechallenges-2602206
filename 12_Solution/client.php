<?php
// SOAP Client erstellen und Verbindung herstellen
$client = new SoapClient(null, array('location' => "http://localhost/phpchallenge/12_Solution/server.php", 'uri' => "http://localhost/phpchallenge/12_Solution/server.php"));
// Methode zum Abrufen der aktuellen Systemzeit aufrufen und Ergebnis ausgeben
echo "<h1>".$client->getTime()."</h1>\n";
?>