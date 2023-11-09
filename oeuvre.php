<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Oeuvre</title>
</head>
<body>
    <?php include('oeuvres.php'); ?>

    <?php
        $oeuvre = null;
        for($i=0; $i < count($oeuvres); $i++){
            if($oeuvres[$i]['id'] == $_GET['id']){ // Récupère l'oeuvre qui correspond à ce que j'ai dans l'URL
                $oeuvre = $oeuvres[$i];
            }
        }


    ?>

    <article>
        <h1><?php echo $oeuvre['title']; ?></h1>
        <p><?php echo $oeuvre['description']; ?></p>
    </article>


</body>
</html>