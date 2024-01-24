<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat contact</title>
</head>
<body>
    <h1>Résultats d'un formulaire de contact.</h1>

    <h1>Demande de précision d'un client.</h1>

    <p>
        <?php
            echo 'Adresse e-mail du client : ' . htmlentities($_POST['mail']);       
        ?>
    </p>
    <p>
        <?php 
            echo 'Précision de la demande du client : ' . htmlentities($_POST['explication']);
        ?>
    </p>
</body>
</html>