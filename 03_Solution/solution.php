<doctype html>
<body>
<head>
<title>Zielseite</title>
<link href="lib/css/form.css" type="text/css" rel="stylesheet" />
</head>
<body>

<?php

// Verbindung zur Datenbank herstellen
$db = mysqli_connect('localhost', 'root', '', 'zugangsdaten');

// Überprüfen, ob die Userid und das Passwort übergeben wurden
if(isset($_POST['userid']) && isset($_POST['password'])){
    
    // Userid und Passwort aus dem POST-Array auslesen
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    
    // SQL-Abfrage vorbereiten und ausführen
    $sql = "SELECT * FROM users WHERE userid = '$userid' AND password = '$password'";
    $result = mysqli_query($db, $sql);
    
    // Überprüfen, ob ein Ergebnis zurückgegeben wurde
    if(mysqli_num_rows($result) == 1){
        echo "<h1>Userid und Passwort sind legitim.</h1>\n";
    } else {
        echo "<h1 class='fehler'>Userid und Passwort sind nicht legitim.</h1>\n";
    }
} else {
    echo "<h1 class='fehler'>Userid und Passwort wurden nicht übergeben.</h1>\n";
}
?>
</form> 
</body>
</html>