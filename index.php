<?php

    //testo normale
    $testo = "Inserisco qui una frase a caso per testare la censura automatica delle parole tramite get. Inserisco le stesse parole più volte per testare l'efficacia della censura automatica della frase";

    //parola da censurare tramite GET
    $censura = $_GET['censura'];

    //nuovo testo censurato che prende la parola da censurare, e la sostituisce con gli asterischi
    $testoCensurato = str_ireplace($censura, "***", $testo);
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!--Qui mostro la frase inizale e la sua lunghezza di caratteri-->
    <h1>Stringa iniziale :</h1>
    <?php echo $testo?>
    
    <h2>lunghezza stringa : <?php echo strlen($testo)?></h2>

    <!--qui mostro la parola che voglio censurare-->
    <h2 style="color:red;">Parola da censurare: <?php echo $censura?></h2>


    <!--qui infine mostro la frase finale, dopo la censura avvenuta tramite str_replace-->
    <h1>Stringa censurata :</h1>
    <?php echo $testoCensurato?>
    <h2>lunghezza stringa censurata: <?php echo strlen($testoCensurato)?></h2>

</body>
</html>