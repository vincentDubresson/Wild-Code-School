<?php

$uploadFile = '';

if($_SERVER['REQUEST_METHOD'] === "POST"){ 

    $uploadDir = 'uploads/';

    $uploadFile = $uploadDir . uniqid() . '-' . basename($_FILES['avatar']['name']);

    $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);

    $authorizedExtensions = ['jpg','jpeg','png'];

    $maxFileSize = 2000000;
    
    if( (!in_array($extension, $authorizedExtensions))){
        $errors[] = 'Veuillez sélectionner une image de type Jpg ou Jpeg ou Png !';
    }

    if( file_exists($_FILES['avatar']['tmp_name']) && filesize($_FILES['avatar']['tmp_name']) > $maxFileSize)
    {
    $errors[] = "Votre fichier doit faire moins de 2M !";
    }

    if (empty($errors))
    {
        move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadFile);
        header('index.php');
    }
}

if($_SERVER['REQUEST_METHOD'] === "GET"){
    if (!file_exists($uploadFile))
    {
        $problemImage[] = "There is no image";
    } else {
        unlink($uploadFile);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homer Simpsons Id Card</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <section class="homerIdCard">
        <div class="city">
            <h1>SPRINGFIELD, IL</h1>
        </div>
        <div class="licenceInfo">
            <div>
                <p>LICENCE#</p>
                <p>64209</p>
            </div>
            <div>
                <p>BIRTH DATE</p>
                <p>4-24-56</p>
            </div>
            <div>
                <p>EXPIRES</p>
                <p>4-24-2015</p>
            </div>
            <div>
                <p>CLASS</p>
                <p>NONE</p>
            </div>
        </div>
        <div class="driver">
            <div class="driverPicture">
                <img src="<?=$uploadFile?>" alt="">
            </div>
            <div class="driverInfo">
                <h2 class="title">DRIVERS LICENCE</h2>
                <div class="adress">
                    <h3>HOMER SIMPSON</h3>
                    <h3>69 OLD PLUMTREE BLVD</h3>
                    <h3>SPRINGFIELD, IL 62701</h3>
                </div>
                <div class="specifics">
                    <div>
                        <p>SEX</p>
                        <p>OK</p>
                    </div>
                    <div>
                        <p>HEIGHT</p>
                        <p>MEDIUM</p>
                    </div>
                    <div>
                        <p>WEIGHT</p>
                        <p>239</p>
                    </div>
                    <div>
                        <p>HAIR</p>
                        <p>NONE</p>
                    </div>
                    <div>
                        <p>EYES</p>
                        <p>OVAL</p>
                    </div>
                </div>
                <div class="signature">
                    <p>Signature : <span>Homer Simpson</span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="addAndDelete">
        <form class="addPicture" method="post" enctype="multipart/form-data">
            <label for="imageUpload">Upload an profile image</label>    
            <input type="file" name="avatar" id="imageUpload" />
            <button name="send">Send</button>
        </form>
        <form method="get">
            <input type="hidden" value="<?= $uploadFile ?>" name="avatar">
            <button type="submit">Delete Picture</button>
        </form>
    </section>
</main>

</body>
</html>