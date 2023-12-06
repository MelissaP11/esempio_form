<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>Materia</title>
</head>
<body>
   <h1>Saluto con materia</h1> 
   <?php
    $nome=$_COOKIE["nome"];
    $cognome=$_COOKIE["cognome"];
    $materia = $_POST["materia"];
    
    print("Ciao $nome $cognome sono molto contento che la tua materia preferita sia: $materia");
   ?>
</body>
</html>