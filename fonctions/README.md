1 - Ecrire une fonction qui calcule puis affiche la moyenne des notes par matière puis la moyenne générale du tableau dans une table HTML.

2 - Ajouter un test qui permet de vérifier si votre tableau existe. Si oui on exécute la fonction, sinon on ne fait rien. Faire plusieurs tests avec plusieurs fonctions de php.

3 -  Ecrire une fonction qui renvoie la somme des N premiers nombres.

4 -  Ecrire une fonction qui affiche toutes les combinaisons de 5 chiffres possibles (cadenas à 5 chiffres par exemple).

5 - Ecrire une fonction qui récupère les informations d'un formulaire (methode post) et qui affiche :

    - l'année en cours
    - la première lettre du prénom
    - les 3 premières lettres du nom
    - le sigle ESC
    - le département
      - exemple : Pour John Doe
      - *2016jdoeESC10*

6 - Complétez le formulaire en incluant le plugin jquery Datepicker correspondant en libellé à Date de début et Date de fin. [Téléchargez le plugin ici](https://jqueryui.com/datepicker/). Il faut donc 2 datepicker... Ou alors il faut trouver une autre solution.

7 - Insérez une zone de texte dans le formulaire ainsi qu'une liste proposant un devis de type :Devis location, Devis camping, Devis mobilhome.

8 - Sur la page de récupération, affichez toutes les informations sous le type :

Bonjour **prenom** **nom**, vous vous êtes inscrit sur notre site le **date**. Votre demande concerne un **type_devis** pour la période du **date_debut** au **date_fin**. Votre login est **login** (correspondant à la récupération du point 5)

 9 - Créez une fonction qui enregistre dans un **fichier texte** les informations reçues. Le fichier s'appelera par exemple **camping.txt**, s'enregistre sur un répertoire data dans votre dossier. Il enregistre ** A LA SUITE** les informations saisies par les visiteurs du site. Il reprend les informations suivantes et dans l'ordre suivant :

    - 0;nom;prenom;typeLocation;dateDebut;dateFin;
    - 1;nom;prenom;typeLocation;dateDebut;dateFin;
    - 2;nom;prenom;typeLocation;dateDebut;dateFin;
    - etc....
