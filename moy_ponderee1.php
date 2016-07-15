<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title" charset="utf-8">
    <title>moyenne ponderee</title>
  </head>
  <body>
    <?php

      $note1 = 12;
      $note2 = 15;
      $note3 = 6;
      $coef1 = 0.5;
      $coef2 = 1;
      $coef3 = 1.5;

      $sommeNote = $note1*$coef1 + $note2*$coef2 + $note3*$coef3;

      $sommeCoef = $coef1 + $coef2 + $coef3;

      $moyPonderee = $sommeNote/$sommeCoef;

      echo 'La moyenne ponderee de '.$note1.' coef '.$coef1.' plus '.$note2.' coef '.$coef2.' plus '.$note3.' coef '.$coef3.' est égale à '.$moyPonderee;




     ?>
  </body>
</html>
