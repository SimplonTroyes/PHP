<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <title>Fiche de tests</title>
  </head>
  <body>
    <?php
    echo '<h2> Fichier de test :</h2>';
    ?>
<h3>1 - J'ai 20 ans. Si j'ai plus de 18 ans je suis majeur, sinon je suis mineur.</h3>
<?php
// Code n°1
$age = 20;
if($age > 18){
  echo 'je suis majeur';
} else {
  echo 'je suis mineur';
}


?>
<h3>2 - J'ai toujours 20 ans. Si j'ai moins de 18 ans, je suis mineur.</h3>
<?php
if($age < 18 ) {
  echo 'je suis mineur';
}

?>
<h3>3 - Si je suis mineur et que j'habite Troyes, alors on me répond "Bonjour jeune Troyen !" </h3>
<?php
// Code n°3
$ville = 'Troyes';
if($age < 18  && $ville == 'Troyes' ){
  echo 'bonjour jeune troyen';
}

?>
<h3>4 - Si je suis mineur et que j'habite Troyes ou Romilly, alors on me répond "Bonjour jeune aubois !!" </h3>
<?php
// Code n°4
if($age < 18 && ($ville == 'Troyes' || $ville == 'Romilly') ){
  echo 'bonjour jeune aubois';
}
?>
<h3>5 - J'ai 26 ans. Le cinéma accorde des réductions junior aux personnes de plus de 25 ans et de moins de 30 ans. Sinon c'est une réduction hors catégorie. </h3>
<?php
// Code n°5
$age = 26;
if ($age > <hr>
<h3>6 - A l'aide des instructions switch/case écrire le test suivant : </h3>
<h4>Je suis de Romilly. Si je suis de romilly, je suis romillon, si je suis de troyes, je suis troyen, si je suis de bar-sur-aube, je suis baralbin, sinon j'habite ailleurs.</h4>
<?php
// Code n°6

?>
uction';
} else {
  echo 'je suis mineur';
  echo 'réduction hors categorie';
}


?>

  </body>
</html>
