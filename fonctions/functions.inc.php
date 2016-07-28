<?php


function aireCercle($toto) {
  $aire = 2*pi()*($toto*$toto);
  return $aire;
}
function ecrireTexte(){
  $texte = 'Hello';
  $texte .= ' Jordan.';
  return $texte;
  //Comment faire pour écrire Hello Jordan avec deux fois la même variable
  // méthode utilisée pour construire une table html dans du php
}

/*********************************************************************/
/*                 AFFICHAGE DES NOTES ET CALCUL DE LEUR MOYENNE     */
/*********************************************************************/
function afficheTableauNotes($tableau){
   $msg = '<h3>Récapitulatif des notes et moyenne</h3>';
   $msg .= '<table border="1">';
   $msg .= '<tr><td>Matière</td><td>Note1</td><td>Note2</td><td>Moyenne</td>';
   $moyenneMatiere = 0;
     foreach($tableau as $matiere => $notes){
       $somme = 0; // initialisation pour faire la moyenne par matière
       $msg .= '<tr><td>'.$matiere.'</td>';
      foreach($notes as $nom => $note) {
        $somme = $somme + $note;
        $msg .= '<td>'.$note.'</td>';
      }
      $moyenne = $somme/count($notes); // moyenne par matière
      $msg .= '<td>'.$moyenne.'</td>';
      $moyenneMatiere = round($moyenneMatiere + $moyenne, 2);
     }
     $moyenneGenerale = $moyenneMatiere / count($tableau);
     $msg .= '<tr><td>Moyenne&nbsp;</td><td>Générale&nbsp;</td><td>'.round($moyenneGenerale, 2).'</td></tr>';
     $msg .= '</table>';
     return $msg;
}

/****************************************/
/*           CADENAS a 5 chiffres       */
/****************************************/

function cadenas5() {
  for($i=0; $i<10;$i++){
    for($j=0; $j<10;$j++){
      for($k=0; $k<10;$k++){
        for($l=0; $l<10;$l++){
          for($m=0; $m<10;$m++){
            echo $i.$j.$k.$l.$m.' || ';
          }
        }
      }
    }
  }
}

/**********************************************/
/*         Combinaison Nom prenom             */
/**********************************************/
function combinaisonNomPrenom(){
    $combinaison = date("Y").substr($_POST['prenom'],0,1).substr($_POST['nom'],0,3).'ESC10';
    return $combinaison;
}

/*************************************/
/*    CHECK DONNEES FORMULAIRE       */
/*************************************/
function verifForm(){
  foreach($_POST as $key => $value){
    echo $key. '=>'.$value.'<br>';
    die('OK Fin verif form');
  }
}

function verifDevis(){
  $typeLocation = array('location','camping','mobilHome','tente');
  if($_POST['typeDevis'] == 'default'):
    $typeDevis = 0;
  endif;
  $typeDevis = array_search($_POST['typeDevis'], $typeLocation);
  return strtoupper($typeLocation[$typeDevis]);
  // return strtoupper($_POST['typeDevis']);
}

function afficheResumeDevis(){
  $msg = 'Bonjour '.ucfirst($_POST['prenom']).' '.ucfirst($_POST['nom']).'<br>';
  $msg .= 'Vous vous êtes inscrit le '.date("d-m-Y");
  $msg .= '<p>Votre demande concerne un devis pour un/une '.verifDevis();
  $msg .= ' pour la période du '.$_POST['dateDebut'].' au '.$_POST['dateFin'].'</p>';
  $msg .= '<p>Votre login temporaire est : '.combinaisonNomPrenom().'</p>';
  return $msg;
}







?>
