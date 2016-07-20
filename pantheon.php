<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pantheon</title>
  </head>
  <body>
    <?php
    $pantheon = array();
    $pantheon['curie'] = array(
                        'Nom' => 'CURIE',
                        'Prénom' => 'Marie',
                        'Image' => 'curie.png',
                        'Bio' => 'physicienne et chimiste'
                      );
    $pantheon['hugo'] = array(
                        'Nom' => 'HUGO',
                        'Prénom' => 'Victor',
                        'Image' => 'hugo.png',
                        'Bio' => 'Ecrivain romantique'
                      );
    $pantheon['rousseau'] = array(
                        'Nom' => 'ROUSSEAU',
                        'Prénom' => 'Jean-Jacques',
                        'Image' => 'rousseau.png',
                        'Bio' => 'Philosophe suisse'
                      );

    echo '<h2>Quelques personnages du Panthéon</h2>';
    echo '<table border="1px">';
    foreach ($pantheon as $personnage => $infoPersonnage) {
      echo '<tr>';
      foreach ($infoPersonnage as $information => $contenu) {
        echo '<td>'.$contenu.'</td>';
      }
      echo '</tr>';
    }
    echo '</table>';
    ?>





  </body>
</html>
