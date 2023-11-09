<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php include('oeuvres.php'); ?>

    <?php

        for($i=0; $i < count($oeuvres); $i++){

        ?>
                <article>
                    <a href="oeuvre.php?id=<?= $oeuvres[$i]['id']; ?>">
                        <?php echo $oeuvres[$i]['title']; ?>
                    </a>
                </article>
          <?php  } ?>


</body>
</html>