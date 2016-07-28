<?php
session_start(); // démarrage de la session
/*
* Récupération des données fournies pas la méthode de formulaire
* et stockage dans les variables de session
*/
$_SESSION['nom']=$_GET['nom'];
$_SESSION['prenom']=$_GET['prenom'];
$_SESSION['nom']=$_GET['nom'];
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recuperation GET</title>
  </head>
  <body>
    <?php
    foreach($_GET as $key => $value){
      echo 'Nom variable : ';
      echo $key.' => '.$value.'<br>';
    }
    var_dump($_GET);
    die('OK');



    // Récupération des données
    $prenom = $_GET['prenom'];
    echo 'Prenom : '.$prenom.'<br>';
    echo 'Nom : '.$_GET['nom'].'<br>';
    ?>
    <p>
      La date est-elle numérique ?
    </p>

    <?php
    if(!is_numeric($_GET['ddn'])){
      echo 'KO';
    }
    $dateNaissance = strtotime($_GET['ddn']);
    echo '<p>Nouveau test de date numérique : ';
      if(!is_numeric($dateNaissance)){
        echo 'toujours pas';
      }
    $dateNaissance = date('Y-m-d', $dateNaissance);
    echo $dateNaissance;


    // echo '</p>';
    $dateJour = date('Y');
    echo '<br>'.$dateJour;
    $age = $dateJour - $dateNaissance;
    $_SESSION['age'] = $age; // on stocke la variable age dans la variable de session
    echo '<br>Vous avez : '.$age.' ans';
    echo '<p></p>Adresse : '.$_GET['adresse'].'<br>';
    echo $_GET['code'].' '.$_GET['burdis'];
    ?>
    <p>
<a href="recup_donnees.php">Lien vers la troisième page</a>
Sans session_start :<br>
<a href="recup_donnees.php?nom=<?php echo $nom ?>&age=<?php echo $age ?>">Lien vers la troisième page</a>
    </p>
  </body>
</html>
