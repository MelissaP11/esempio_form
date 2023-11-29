<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>Saluto</title>
</head>
<body>
   <h1>Saluto</h1> 
   <?php
    $nome = $_POST["nome"]; //array associativo per PHP
    $cognome = $_POST["cognome"];
    $sesso = $_POST["sesso"];
    if($sesso == "M") {// maschio 
        print("Benvenuto $nome $cognome");
    }else { //femmina
        print("Benvenuta $nome $cognome");
    }
    
    //print("<p>Il tuo nome è: $nome</p>");
    //print("<p>Il tuo cognome è: $cognome</p>");
   ?>
</body>
</html>