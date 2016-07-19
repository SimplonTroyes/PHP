<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recuperation GET</title>
  </head>
  <body>
    <?php
    // Récupération des données
    $prenom = $_POST['prenom'];
    // echo 'Prenom : '.$_POST['prenom'].'<br>';
    echo 'Prenom : '.$prenom.'<br>';
    echo 'Nom : '.$_POST['nom'].'<br>';
    ?>
    <p>
      La date est-elle numérique ?
    </p>

    <?php
    if(!is_numeric($_POST['ddn'])){
      echo 'KO';
    }
    $dateNaissance = strtotime($_POST['ddn']);
    echo '<p>Nouveau test de date numérique : ';
      if(!is_numeric($dateNaissance)){
        echo 'toujours pas';
      }
    $dateNaissance = date('Y', $dateNaissance);
    // echo '</p>';
    $dateJour = date('Y');
    $age = $dateJour - $dateNaissance;
    echo '<br>Vous avez : '.$age.' ans';
    echo '<p></p>Adresse : '.$_POST['adresse'].'<br>';
    echo $_POST['code'].' '.$_POST['burdis'];
    ?>
    <p>
      <a href="recup_donnees.php?age=<?php echo $age; ?>&prenom=<?php echo $prenom; ?>">Lien vers la troisième page</a>
    </p>
  </body>
</html>
