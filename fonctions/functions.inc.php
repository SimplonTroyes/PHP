<?php


function aireCercle($toto) {
  $aire = 2*pi()*($toto*$toto);
  return $aire;
}
function ecrireTexte(){
  $texte = 'Hello';
  $texte .= ' Jordan.';
  return $texte;
  //Comment faire pour écrire Coucou Jordan
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




?>
