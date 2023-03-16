<?php
// SOAP Server erstellen

$server = new SoapServer(null, array('uri' => "http://localhost/")); 
// Funktion zum Abrufen der aktuellen Systemzeit hinzufügen
$server->addFunction("getTime");

// Funktion zum Abrufen der aktuellen Systemzeit
function getTime() {
    return date("H:i:s");
}
 
// SOAP-Anfrage bearbeiten
$server->handle();
?>
 