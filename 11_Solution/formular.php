<doctype html>
<body>
<head>
<title>Warenkorb</title>
<link href="lib/css/warenkorb.css" type="text/css" rel="stylesheet" />
</head>
<body>
<h1>Warenkorb</h1>
<h2>Eingabe des gewünschten Produkts und dessen Anzahl</h2>
 <form action="warenkorb.php" method="get">


    <label for="produktname">Produkt</label>
    <input type="text" placeholder="Produktname" name="produktname" required><br />

    <label for="anzahl">Anzahl</label>
    <input type="number" placeholder="Anzahl" name="anzahl" required><br />

    <button type="submit">Bestellen</button>
 
</form> 
</body>
</html>