<doctype html>
<body>
<head>
<title>Gästebuch</title>
<link href="lib/css/gaestebuch.css" type="text/css" rel="stylesheet" />
</head>
<body>
<h1>Gästebuch</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
    <label for="name">Name:</label> <input type="text" name="name" /><br /> 
    <label for="email">E-Mail:</label> <input type="text" name="email" /><br /> 
    <label for="nachricht">Nachricht:</label><br /> 
    <textarea name="nachricht" cols="70" rows="10"></textarea><br /> 

    <input type="submit" name="submit" value="Absenden" /> 
</form>
<div class="meldungen">
<?php
//Verbindung zur Datenbank herstellen
$db_host = "localhost";
$db_name = "gaestebuch";
$db_user = "root";
$db_pass = "";

try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Verbindung fehlgeschlagen: " . $e->getMessage();
}

//Gästebuch-Eintrag speichern
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $nachricht = $_POST['nachricht'];

    try {
        $sql = "INSERT INTO guestbook (name, email, nachricht) VALUES (:name, :email, :nachricht)";

        $stmt = $db->prepare($sql);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':nachricht', $nachricht);

        if ($stmt->execute()) {
            echo "Gästebucheintrag erfolgreich gespeichert!";
        } else {
            echo "Fehler beim Speichern des Gästebucheintrags!";
        }

    } catch (PDOException $e) {
        echo "<h3>Fehler: " . $e->getMessage() . "</h3>\n";
    }
}
?>
</div>
<div class="eintraege">
<?php
try {
    $sql = "SELECT * FROM guestbook";

  

    $data = $db->query($sql)->fetchAll();
    foreach ($data as $row) {
        echo "<div>Name: " . $row['name'].", E-Mail: " . $row['email']."</div><br />\n";
        echo "<div>" . $row['nachricht']."</div><hr />\n";
    }

} catch (PDOException $e) {
    echo "<h3>Fehler: " . $e->getMessage() . "</h3>\n";
}
?> 
</div>

</body>
</html>