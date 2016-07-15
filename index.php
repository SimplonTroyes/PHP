<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Première page en PHP</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/styles.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    Comment écire en php ?<br>
    <?php
      echo 'Hello World !';
      $phrase = 'Je m\'appelle ';
      $prenom1 = 'Xavier.';
      // echo $prenom1;
    ?>
    <p>
      Je m'appelle Xavier.
    </p>
    <?php
    /*
    * Ecrire une ligne en php qui affiche la phrase et votre prénom et un saut de ligne
    */
    echo $phrase;
    echo $prenom1;
    echo '<br>Je m\'appelle'.$prenom1;
    echo '<br>'.$phrase.$prenom1;

    ?>

  </body>
</html>
