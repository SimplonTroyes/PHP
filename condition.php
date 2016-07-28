<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title" charset="utf-8">
    <title>Condition</title>
  </head>
  <body>
    <?php
    /*
    * Conditions en php
    */
    $note1 = '3+2';
    $note2 = 10;

    /*
    * Comparer $note1 et $note2
    * Si $note1 = 5, instructions affichées
    */
    if (isset($note1) ){
      echo 'La note est égale à 5';
      echo '<br>Résultat de isset() : '.isset($note1);
    }
    echo '<br>J\'affiche la note1 '.$note1;


      $note1 = 12;
      $note2 = 15;
      $note3 = 6;
      $coef1 = 0.5;
      $coef2 = 1;
      $coef3 = 1.5;

      $sommeNote = $note1*$coef1 + $note2*$coef2 + $note3*$coef3;
      $sommeCoef = $coef1 + $coef2 + $coef3;
      $moyPonderee = $sommeNote/$sommeCoef;
      echo '<p>La moyenne ponderee de '.$note1.' coef '.$coef1.' plus '.$note2.' coef '.$coef2.' plus '.$note3.' coef '.$coef3.' est égale à '.$moyPonderee.'</p>';

      /* Ecriture de test  */
      if ($note1 <= 10) {
        echo '<p>Moins que la moyenne</p>';
        } else {
        echo '<p>Plus que la moyenne</p>';
      }

      echo '<p>Condtion linéaire :</p>';
      echo $reponseMoyenne = ($note1 <= 10) ? 'Moins que la moyenne':'Plus ou la moyenne';

      echo '<br>Autre écriture de test conditionnel : <br>';
      $reponseCondition = (is_numeric($note1)) ? "true": "false";
      echo '<br>'.$reponseCondition;


     ?>
  </body>
</html>
