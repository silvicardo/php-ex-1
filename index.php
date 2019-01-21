<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Censuratore PHP</title>
  </head>
  <body>

    <?php

    //url --> percorsoLocalhost/index.php?badword=

    $fraseDaEsaminare = "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam.Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam.";

    $badword = $_GET["badword"];

    //str_replace non è case sensitive
    $fraseFinale = str_replace($badword, "***", $fraseDaEsaminare);

    //echo "Frase censurata:\n $fraseFinale";

    ?>
    <p>Frase iniziale: <br><?php echo $fraseDaEsaminare; ?></p>
    <p>Censuro <?php echo $badword; ?></p>
    <p>Frase censurata: <br><?php echo $fraseFinale ?></p>
  </body>
</html>
