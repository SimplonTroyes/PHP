<?php
/**
 * Created by PhpStorm.
 * User: Xavier
 * Date: 29/07/2016
 * Time: 10:40
 */
function nomPageActive()
{
    $fichier = basename($_SERVER['PHP_SELF']);
    $nomPageComplet = explode('.', $fichier);
    return 'page'.$nomPageComplet[0];
}

function afficheTexte()
{
    //Première fonction. Optimisée avec la fonction affichageTexteMisEnForme
    $nomFichier = nomPageActive() . '.txt';
    $dirname = 'txt/';
    if(!file_exists($dirname.$nomFichier)):
        return 'Bienvenue sur Wild\'n Trekking';
    else:
        readfile($dirname.$nomFichier);
    endif;
}

function affichageTexteMisEnForme(){
    $nomFichier = nomPageActive() . '.txt';
    $dirname = 'txt/';
    if(!file_exists($dirname.$nomFichier)):
        return 'Bienvenue sur Wild\'n Trekking';
    else:
        $texte = '';
        $fichierComplet = $dirname.$nomFichier;
        $textBrut = file_get_contents($fichierComplet,FILE_USE_INCLUDE_PATH);
        $textFinal = explode("\n", $textBrut);
        foreach($textFinal as $ligne):
            $texte .= $ligne.'<br>';
        endforeach;
        return $texte;
    endif;
}

function copieFichierText(){
    $fichierDestination = '..'.DIRECTORY_SEPARATOR.'txt'.DIRECTORY_SEPARATOR.'page'.$_FILES['fichier']['name'];
    $message ='';
    if(!file_exists($fichierDestination)):
        if(!move_uploaded_file($_FILES['fichier']['tmp_name'],$fichierDestination)):
            $message = 'Désolé, il y a eu une erreur de chargement';
        endif;
    else:
        $message .= 'Le fichier existe déjà. Merci de le renommer ou d\'en créer un autre.';
    endif;
    return $message;
}

function listeFichiersTexte() {
    $listeFichiers='';
    $nb_fichier = 0;
    if($dossier = opendir('..'.DIRECTORY_SEPARATOR.'txt'))
    {
        while(false !== ($fichier = readdir($dossier)))
        {
            if(preg_match('/\.txt$/i', $fichier))
            {
                //Les noms des fichiers sont mis dans un tableau
                $tabfichier[]=$fichier;
                //Le tableau est trié avec la fonction sort
                sort($tabfichier);
                $nb_fichier++; // On incrémente le compteur de 1
            } // On ferme le if (qui permet de ne pas afficher index.php, etc.)
        } // On termine la boucle
//Affichage des données du tableau trié
        foreach($tabfichier as $key => $nomfichier)
        {
            $listeFichiers .= $nomfichier.'<br>';
        }
        $listeFichiers .='Il y a <strong>' . $nb_fichier .'</strong> fichier(s) dans le dossier';
        closedir($dossier);
    }
    else
    {
        $listeFichiers .= 'Le dossier n\' a pas pu être ouvert';
    }
    return $listeFichiers;
}

  function listePages() {
      $listePages='';
      $nb_fichier = 0;
      if($dossier = opendir('..'.DIRECTORY_SEPARATOR.''))
      {
          while(false !== ($fichier = readdir($dossier)))
          {
              if(preg_match('/\.php$/i', $fichier) && $fichier != 'verifdemande.php' && $fichier != 'menu.php' && $fichier != 'admin/menu.php')
              {
                  //Les noms des fichiers sont mis dans un tableau
                  $tabfichier[]=$fichier;
                  //Le tableau est trié avec la fonction sort
                  sort($tabfichier);
                  $nb_fichier++; // On incrémente le compteur de 1
              } // On ferme le if (qui permet de ne pas afficher index.php, etc.)
          } // On termine la boucle
  //Affichage des données du tableau trié
          foreach($tabfichier as $key => $nomfichier)
          {
              $listePages .= $nomfichier.'<br>';
          }
          $listePages .='Il y a <strong>' . $nb_fichier .'</strong> fichier(s) dans le dossier';
          closedir($dossier);
      }
      else
      {
          $listePages .= 'Le dossier n\' a pas pu être ouvert';
      }
      return $listePages;
  }


function creationPage(){
    $suffix='.php';
    $fichierOrigine = '../templates/template.php';
    $dirDestination = '../';
    $nomFinalApres = $_POST['nomPage'];
    $fichierDestination = $_POST['nomPage'].$suffix;
    if(file_exists($dirDestination.$fichierDestination)):
      $message = 'Le fichier existe déjà. Merci de donner un autre nom';
    else:
      if (!copy($fichierOrigine, $dirDestination.$fichierDestination)) {
          $message = 'La copie du fichier a échoué...'."\n";
      }
    endif;
    return $message;


}
