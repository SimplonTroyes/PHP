## Exemples et modèles de formulaire
Un formulaire est défini par la balise form qui inclut la méthode de transmission des données du formulaire vers une autre page par le serveur.
Si :
- method='post' alors on utilisera *$_POST['variable']*
- method='get' alors on utilisera *$_GET['variable']*


### Type de valeurs pour l'attribut type de la balise *<input>*
text, password, checkbox, radio, submit, reset, file, hidden, image, button
Exemple : <input type="text" name="nomVariable" >

## BONUS
Objectif : créer un formulaire de contact avec envoi de mail et pièce jointe
NB : Travaillez par étape ^^
Exemple :
- 1ère étape : envoi simple de mail
- 2ème étape : ajout d'un fichier
- 3ème étape : récupération et affichage des informations du fichier
- 4ème étape : enregistrement du fichier en local
- etc...
La pièce jointe doit s'enregistrer dans un de VOS répertoires. Attention aux droits d'accès linux.
