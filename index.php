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
      Affichage des nombres de 1 à 50 avec DO...WHILE<br>
      <?php
      $i = 1; //-1
      do {
        echo $i.' ';
        $i++; // $i=$i+1
      } while ($i <= 50);
       ?>
    </p>
    <p>
      Affichage des nombres de 1 à 50 avec WHILE<br>
      <?php
      $i = 1;
      while ($i <= 50){
        echo $i.' ';
        $i++;
      }
       ?>
    </p>
    <p>
      Affichage des nombres de 1 à 50 avec FOR<br>
      <?php
      for ($i = 1;$i <= 50;$i++){
        echo $i.' ';
      }
       ?>
    </p>
    <p>
      Affichage des nombre pairs de 1 à 49<br>
      <?php
      // Votre code ici puis copiez collez en local sur votre localhost
      for ($i = 2; $i <= 48; $i = $i + 2) {
            echo $i. " ";
          }

      ?>
    </p>
    <p>
      Affichage des nombre impairs de 50 à 100<br>
      <?php
      // Votre code ici puis copiez collez en local sur votre localhost
      for ($a = 51; $a <= 99; $a = $a + 2) {
        echo $a. " ";
      }
      ?>
    </p>
    <p>
      Affichage des nombre pairs de 100 à 50<br>
      <?php
      // Votre code ici puis copiez collez en local sur votre localhost
      for ($p = 100; $p >= 50; $p = $p - 2) {
        echo $p. " ";
      }
      ?>
    </p>

  </body>
</html>
