<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <h3>6 - A l'aide des instructions switch/case écrire le test suivant : </h3>
      <h4>Je suis de Romilly. Si je suis de romilly, je suis romillon, si je suis de troyes, je suis troyen, si je suis de bar-sur-aube, je suis baralbin, sinon j'habite ailleurs.</h4>
      <?php
      // Code n°6
    $habitant = 'Romilly';
    switch ($habitant){
      case 'Romilly' :
        echo '<br>je suis romillon';
        break;
      case 'Bar-sur-Aube' :
        echo '<br>je suis baravin';
        break;
      case 'Troyes' :
        echo '<br>je suis troyen';
        break;
        default:
        echo '<br>j\'habite ailleurs';
      }

      ?>
      <h3>7 - Je reçois une variable d'un formulaire mais je ne connais pas son contenu. Ecrire le test permettant de vérifier si ma variable contient quelque chose.  </h3>
      <h4>isset — Détermine si une variable est définie et est différente de NULL</h4>
      <h4>empty — Détermine si une variable est vide</h4>
      <?php
      // $maVariable ='';
      //echo 'maVariable : '.$maVariable;
      if(empty($maVariable)){
        echo 'réponse TRUE';
      } else {
        echo 'réponse FALSE';
      }

      $var = 0;

      // Evalué à vrai car $var est vide
      if (empty($var)) {
        echo '<br>$var vaut soit 0, vide, ou pas définie du tout';
      }

      // Evalué à vrai car $var est défini
      if (isset($var)) {
        echo '<br>$var est définie même si elle est vide';
      }
      $var2 = NULL;

// Ceci est vrai, alors le texte est affiché
    if (isset($var2) == true) {
        echo '<br>Cette variable existe, donc je peux l\'afficher.';
    }
      ?>
<!-- Détermine si une variable est définie et est différente de NULL
-->

    </div>
    <hr>


  </body>
</html>
