<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Thanks for your message !</title>
</head>
<body>

    <?php

    if (!filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL))
    {
        echo "<div class=\"messageError\"><p>Nous observons une erreur de saisie de votre email. Merci de revoyer le formulaire avec une adresse email valide :)</p>";
        echo "<p><a href=\"./form.php\"><strong>Retourner au formulaire</strong></a></p></div>";
        exit();
    }

    if (!filter_var($_POST['userPhoneNumber'], FILTER_SANITIZE_NUMBER_INT))
    {
        echo "<div class=\"messageError\"><p>Nous observons une erreur de saisie de votre numéro de téléphone. Merci de revoyer le formulaire avec un numéro valide :)</p>";
        echo "<p><a href=\"./form.php\"><strong>Retourner au formulaire</strong></a></p></div>";       
        exit();
    }  

    foreach($_POST as $entry => $value)
    {
        if (empty($value))
        {
            echo "<div class=\"messageError\"><p>Tous les champs sont obligatoires. Merci de renvoyer le formulaire complet :)</p>";
            echo "<p><a href=\"./form.php\"><strong>Retourner au formulaire</strong></a></p></div>";
            exit();
        }
    }
    ?>

    <div class="message">
        <p>Merci <strong><?php echo "{$_POST['userFirstName']}"; ?> <?php echo "{$_POST['userLastName']}"; ?></strong> de nous avoir contacté à propos du langage <strong><?php echo "{$_POST['userSubject']}"; ?></strong>.</p>
        <p>Un de nos conseillers vous contactera soit à l'adresse <strong><?php echo "{$_POST['userEmail']}"; ?></strong> ou par téléphone au <strong><?php echo "{$_POST['userPhoneNumber']}"; ?></strong> dans les plus brefs délais pour traiter votre demande :</p>
        <p><strong><?php echo "{$_POST['userMessage']}"; ?></strong></p>
    </div>
</body>
</html>