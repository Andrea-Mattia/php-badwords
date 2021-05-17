<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

    <?php
    // DESCRIZIONE:
    // Creare una variabile con assegnato un testo per popolare un paragrafo.
    // Visualizzare a schermo il paragrafo.
    // Visualizzare a schermo la lunghezza di testo del paragrafo.
    // Passare un parametro (query string) nella url chiamato badword con assegnato il valore di una parola scelta da voi, ottenere il suo valore con GET in PHP e sostituire ogni ricorrenza di questa parola, all'interno del testo creato da voi sopra, con tre *.
    // Stampare a schermo il paragrafo con il testo censurato.

    $name = 'Andrea';
    $text = 'Lorem ipsum foffa dolor sit amet, consectetur foffa';
    $length = strlen($text);
    $bad_word = $_GET['badword'];
    $replace = str_replace($bad_word, '***', $text);
    ?>

    <header>
        <h1>Welcome <?php echo $name; ?></h1>
        <p>Il testo è: <?php echo $text; ?></p>
        <p>La lungezza del testo: "<?php echo $text; ?>" è: <?php echo $length; ?> caratteri.</p>
        <p>Il testo censurato è: <?php echo $replace; ?></p>
    </header>
</body>
</html>