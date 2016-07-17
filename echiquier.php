<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title" charset="utf-8">
    <title>Boucles en php</title>
  </head>
  <body>
    Les boucles permettent de répeter plusieurs fois un même bloc d'instructions
    <p>
      3 types de boucles :
      <ul>
        <li>Boucle    for .... (pour)</li>
        <li>Boucle    while... (tant que)</li>
        <li>Boucle    Do.... while (répéter jusqu'à)</li>
      </ul>
    </p>
    <p>
      Echiquier <br>
      <?php
      for ($i=1;$i <= 8;$i++){
        // Affichage d'une ligne
        echo $i.' ';
     }
    ?>
    </p>

  </body>
</html>
