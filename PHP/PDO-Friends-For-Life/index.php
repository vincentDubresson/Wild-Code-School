<?php

require_once '_connec.php';
$pdo = new \PDO(DSN, USER, PASS);

$names = [];

// Insertion de nouveaux friends
if (!empty($_POST['firstname']) && isset($_POST['firstname']) && !empty($_POST['lastname']) && isset($_POST['lastname']))
{
    $names['firstname'] = trim($_POST['firstname']);
    $names['lastname'] = trim($_POST['lastname']);

    if (strlen($names['firstname']) < 45)
    {
        $query = 'INSERT INTO friend (firstname, lastname) VALUES (:firstname, :lastname);';
        $statement = $pdo->prepare($query);
        $statement->bindValue(':firstname', $names['firstname'], \PDO::PARAM_STR);
        $statement->bindValue(':lastname', $names['lastname'], \PDO::PARAM_STR);
        $statement->execute();
        header('Location: index.php');
    }
}

// Affichage en liste des noms et prénoms
$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PDO - Un ami pour la vie</title>
</head>
<body>
    <ul>
        <?php
        foreach ($friends as $friend) { 
        ?>
            <li><?= $friend['firstname'] . ' ' . $friend['lastname']; ?> </li>
        <?php
        }
        ?>
        
    </ul>
    <form class="form" action="" method="post">
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" id="firstname">
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" id="lastname">
        <button type="submit">Submit</button>
    </form>
</body>
</html>

