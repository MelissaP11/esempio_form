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
   ?><br><br>
   <form method="post" action="materia.php">
    Scegli la tua materia preferita:
    <select name="materia">
        <option value="italiano">Italiano</option>
        <option value="storia">Storia</option>
        <option value="matematica">Matematica</option>
        <option value="inglese">Inglese</option>
        <option value="informatica">Informatica</option>
        <option value="economia_az">Economia Aziendale</option>
        <option value="diritto">Diritto</option>
        <option value="economia_pol">Economia Politica</option>
        <option value="scienze_motorie">Scienze motorie</option>
        <option value="religione">Religione</option>
    </select>
    <input type="submit">
    </form>
</body>
</html>