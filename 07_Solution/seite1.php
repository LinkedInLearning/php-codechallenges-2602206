<?php
session_start();
$_SESSION["seite1Geladen"]=time();

?>
<doctype html>
<body>
<head>
<title>Webseite 1</title>
</head>
<body>
<h1>Klicken Sie auf den nachfolgenden Link</h1>
<a href="seite2.php">Seite 2</a>
</body>
</html>