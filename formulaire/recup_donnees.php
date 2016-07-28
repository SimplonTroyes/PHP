<?php
session_start(); // démarrage de la session
// obligatoire pour récupérer les variables de session stockées
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recup données</title>
  </head>
  <body>
    <?php
    echo $_SESSION['nom'].'<br>';
    echo $_SESSION['prenom'].'<br>';
    echo $_SESSION['age'].'<br>';




     ?>
  </body>
</html>
