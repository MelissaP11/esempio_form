<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>Esempio action</title>
</head>
<body>
   <h1>Recupero i dati del form</h1> 
   <?php
    $nome = $_GET["nome"];
    $cognome = $_GET["cognome"];
    print("<p>Il tuo nome è: $nome</p>");
    print("<p>Il tuo cognome è: $cognome</p>");
   ?>
</body>
</html>