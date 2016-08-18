## Challenge PHP Mini Site de voyage
Vous êtes contactés par une agence de voyage qui organise des treks en Himalaya.
Ils vous fournissent un début d'arborescence de site à savoir :

    - un répertoire img contenant 4 images
    - un répertoire txt contenant 4 fichiers textes correspondant aux pages à créer.

### Votre challenge :
1 - Créer le mini site (4 pages correspondant aux 4 fichiers textes)

2 - Créer le désign CSS (sans bootstrap) du site avec la consigne suivante **OBLIGATOIREMENT** : la feuille de style doit comporter 4 styles spécifiques avec les 4 fonds d'images fournis et s'afficher en fonction du nom de la **PAGE ACTIVE** : exemple : si la page s'appelle index, il devra exister une classe **pageindex** dans ma feuille de style.

3 - Ce que veulent les organisateurs c'est pouvoir écrire ce qu'ils veulent dans le fichier texte correspondant à la page sans avoir à manipuler le code PHP ou HTML. Par exemple, le contenu de la page **prestations.php** est le fichier **prestations.txt**.

4 - Créer un répertoire class qui contiendra un fichier de fonctions. Les fonctions doivent :

    - afficher le style de la page automatiquement !
    - affichier le fichier texte correspondant au nom de la page !

5 - Pour ajouter du défi ( et dans le temps imparti), ajoutez un répertoire **admin** avec trois pages dans ce répertoire (index, ajoutfichier et creationpage).
    - la page **index** : fait un résumé des autres pages
    - la page **ajoutfichier** : formulaire d'envoi de fichier texte vers le répertoire **txt**. Un test doit être réalisé pour vérifier si le fichier existe déjà. Si oui, un message apparait pour informer la personne uploadant le fichier.
    - la page **creationpage** génère une nouvelle page php selon un modèle (dans le répertoire **templates**)

6 - Et si vous avez encore le temps, protégez l'accès au répertoire admin avec un code d'accès :D (NB : allez voir du côté de htaccess..)
    - afficher le fichier texte correspondant au nom de la page !

### Principe de fonctionnement :
Une page **visites.php** est créée par l'agence web (vous). Il s'agit d'un simple copier coller d'une des pages existantes. Les clients créent un fichier **visites.txt** qu'ils uploadent dans le répertoire **txt**.
La fonction vérifie le nom de la page **active**, le récupère et charge la classe **pageNomfichierActif** du fichier CSS.
De même, une fonction vérifie le nom de la page active et va récupérer, mettre en forme et afficher le fichier **txt** correspondant au nom de la page active.
