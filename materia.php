<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>Materia</title>
</head>
<body>
   <h1>Saluto con materia</h1> 
   <?php
   session_start();
    $nome=$_SESSION["nome"];
    $cognome=$_SESSION["cognome"];
    $materia = $_POST["materia"];
    
    print("Ciao $nome $cognome sono molto contento che la tua materia preferita sia: $materia");
   ?>
</body>
</html>