<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pantheon</title>
  </head>
  <body>
    <?php
    echo '<hr>';
    echo '<h2>Notes</h2>';
    $tabNotes = array(
                "Note 1" => 14,
                "Note TP" => 12,
                "Note m1202" => 8
    );
    echo '<table border="1px">';
    foreach ($tabNotes as $key => $value) {
      echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
    }
    echo '</table>';

    echo '<hr>';
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
