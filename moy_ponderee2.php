<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
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
echo 'votre moyenne est de '.$moyPonderee;
if ($moyPonderee >= 10){
  echo '<br>vous avez la moyenne';
} else {
  echo 'vous n\'avez pas la moyenne';
}
$condition = ($moyPonderee >= 10)? 'Vous avez la moyenne':'Vous n\'avez pas la moyenne';
echo '<br>'.$condition;


    ?>
  </body>
</html>
