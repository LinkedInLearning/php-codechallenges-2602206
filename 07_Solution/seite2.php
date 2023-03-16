<?php
session_start();
$seite2Geladen=time();

?>
<doctype html>
<body>
<head>
<title>Webseite 2</title>
</head>
<body>
<h1>
<?php

echo "<h2>Die erste Webseite wurde " . ($seite2Geladen - $_SESSION["seite1Geladen"]) . " Sekunden angezeigt.</h2>\n";

?>
</h1>
<?php
session_destroy();
?>
</body>
</html>