<!-- Creare un form che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->
<?php
$bad_word = $_GET['bad-word'];
$paragraph = $_GET['paragraph'];

$paragraph_lentgh = strlen($paragraph);

$filtered_paragraph = str_replace($bad_word, '***', $paragraph);

$filtered_paragraph_lentgh = strlen($filtered_paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Nicola Placentino">
    <title>Bad Words</title>
</head>

<body>
    <h1>Bad Words</h1>

    <h3>Il tuo paragrafo originale:</h3>
    <p><?php echo $paragraph ?></p>
    <h5>Lunghezza paragrafo: <?php echo $paragraph_lentgh ?></h5>
    
    <hr>

    <h3>Il paragrafo censurato:</h3>
    <p><?php echo $filtered_paragraph ?></p>
    <h5>Lunghezza paragrafo: <?php echo $filtered_paragraph_lentgh ?></h5>

</body>

</html>