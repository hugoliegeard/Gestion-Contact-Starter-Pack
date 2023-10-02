# Gestion de Contact
  
Durant cette séance, vous allez pouvoir pratiquer les différentes notions abordées ensemble en cours.

Les exercices sont à réaliser dans l'ordre, vous pouvez avancer à votre rythme.
  

## I. Base de donnée.
 
 L'objectif de cette première partie est de mettre en place la base de donnée de votre application.

### A. Création de la base de donnée.

![Modele Logique de Données](https://github.com/hugoliegeard/Gestion-Contact-Starter-Pack/blob/master/_Mod%C3%A9lisation/GestionContact_MLD.png?raw=true)  

  En vous appuyant sur le MLD ci-dessus, construisez votre base de donnée SQL.

### B. Configuration de la base de donnée

Dans votre projet, vous compléter les fichiers `config.php` et `database.php` afin de connecter votre application PHP avec votre nouvelle base de données.

> NOTA BENE : N'oubliez pas qu'il vous faudra inclure vos fichiers de configuration et de connexion dans votre site internet. Par exemple `_header.php`.

### C. Données de démonstration

En vous aidant d'outil comme `PhpMyAdmin`, créez des données de démonstration pour votre application.

 1. Ajouter un administrateur ;
 2. Associez lui plusieurs contacts.


## II. Vous avez dit C.R.U.D ?
 
Notre base de données étant en place, nous allons pouvoir rendre notre application dynamique.

### A. Page d'accueil

En vous aidant du tableau HTML présent en page d'accueil `index.php`, affichez la liste des contacts de la base.

### B. Page Contact

En cliquant sur le petit œil de la colonne **Actions**, mettez en place la page `contact.php` permettant d'afficher la fiche détail d'un contact.

> NOTA BENE :  Vous utiliserez ma méthode _GET pour passer et récupérer les informations.

### C. Ajouter un Contact

Depuis le fichier `ajouter-un-contact.php`, vous créez un formulaire permettant l'ajout d'un nouveau contact dans la BDD.

> NOTA BENE : Vous pouvez mettre en place en option un système de notification Flash.

### D. Modification

En cliquant sur le petit crayon jaune de la colonne **Actions**, vous mettrez en place en place le formulaire permettant de modifier les informations d'un contact.

> NOTA BENE :  Vous utiliserez ma méthode _GET pour passer et récupérer les informations.

### E. Suppression

En cliquant sur la poubelle rouge de la colonne **Actions**, vous supprimerez le contact de la base de donnée.

> NOTA BENE :  En option, vous pouvez vous aider de la librairie https://sweetalert2.github.io/ et demander à l'utilisateur une confirmation avant la suppression.

### F. BONUS

L'utilisateur de notre application aimerait pouvoir générer un PDF de la fiche d'un contact.

Written with ❤️ by [Hugo LIEGEARD](https://github.com/hugoliegeard).
