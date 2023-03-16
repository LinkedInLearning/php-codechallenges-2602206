<doctype html>
<body>
<head>
<title>Warenkorb</title>
<link href="lib/css/warenkorb.css" type="text/css" rel="stylesheet" />
</head>
<body>

<?php


//Verbindung zur Datenbank herstellen
$db_host = "localhost";
$db_name = "kaufhaus";
$db_user = "root";
$db_pass = "";
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die("<h4>Verbindung fehlgeschlagen: " . mysqli_connect_error() . "</h4>\n");
}
 
//Produktnamen und Anzahl aus GET-Parameter abrufen
$produktname = $_GET['produktname'];
$anzahl = $_GET['anzahl'];
 
//SQL-Abfrage vorbereiten und ausführen
$sql = "INSERT INTO warenkorb (produktname, anzahl) VALUES ('$produktname', '$anzahl')";
if (mysqli_query($conn, $sql)) {
    echo "<h1>Produkt $produktname wurde $anzahl mal bestellt.</h1>\n";
} else { 
    echo "<h1 class='fehler'>Fehler beim Hinzufügen des Produkts: " . mysqli_error($conn) . "</h1>\n";
}
 
//Verbindung schließen
mysqli_close($conn);
?>

</body>
</html>