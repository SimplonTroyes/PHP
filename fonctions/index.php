<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <title>Ecriture de fonctions</title>
  </head>
  <body>
    <div class="container">
      <h3>Suite des tests d'écriture de fonction</h3>
      <ol>
        <li>Soit le tableau suivant : </li>
            <table class="table table-content">
              <tr>
                <td>
                  Matières
                </td>
                <td>
                  Notes1
                </td>
                <td>
                  Notes2
                </td>
              </tr>
              <tr>
                <td>
                  Histoire
                </td>
                <td>
                  15
                </td>
                <td>
                  12
                </td>
                <td>
                  13,5
                </td>
              </tr>
              <tr>
                <td>
                  Maths
                </td>Matière	Note1	Note2
                <td>
                  8
                </td>
                <td>
                  10
                </td>
              </tr>
              <tr>
                <td>
                  Php
                </td>
                <td>
                  7
                </td>
                <td>
                  5
                </td>
                <td>
                  6
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  Moyenne Générale
                </td>
                <td>
                  9,83
                </td>
              </tr>
            </table>
          Ecrire une <strong>fonction</strong> qui calcule puis affiche la moyenne des notes par matière puis la moyenne générale du tableau dans une table HTML
          <li>Ajouter un test qui permet de vérifier si votre tableau existe. Si oui on exécute la fonction, sinon on en fait rien. Faire plusieurs tests avec plusieurs fonctions de php</li>
        <li>Ecrire une fonction qui renvoie la somme des N premiers nombres</li>
        <li></li>
        <?php

        $tabNotes2=array(
                "histoire" => array(15,12),
                "maths" => array(12,8),
                "Php" => array(17,15),
                "sciences" => array(12,14)
        );
        include('functions.inc.php');
        // include('function.inc.php');

        /*  Test de vérification d'existence du tableau ou de la variable    */
          if(is_array($tabNotes2)):
            echo 'tabNotes2 est un tableau OK';
          else:
            echo 'ce n\'est pas un tableau';
          endif;
        // Autre écriture de test

        if(isset($tabNotes2) && is_array($tabNotes2)) {
          echo afficheTableauNotes($tabNotes2);
        } else {
          exit();
        }

         ?>
<div class="">
 <span>
   <?=(!isset($tabNotes2) && !is_array($tabNotes2)?'Aucun tableau n\'est défini':afficheTableauNotes($tabNotes2))?>
 </span>
</div>

      </ol>
    </div>









  </body>
</html>
