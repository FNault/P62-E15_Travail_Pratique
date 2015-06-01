# Travail Pratique #
## Cours : 420-P62-E15 ##

### À Faire : ###
 -  Fichier PHP contenant les datas des articles; FAIT DANS BDD
 -  Contenus des différentes pages :
    -  Articles dans la page "Nouvelles"; FAIT ( Presque fini)
    -  Formulaire d'inscription;
    -  Page d'ajout d'articles avec connexion nécéssaire pour y accéder; DÉBUTÉ (PAGE ADMIN)
    -  Champs d'ajout des commentaires au articles;
    -  Champs de connexion; FAIT
    -  Page du formulaire de contact;
 -  Fonctionnalité de connexion/déconnexion; FAIT
 -  Validation des différents formulaires;
 -  Système d'inscription persistante avec base de données (Priorité Moyenne);
 -  Fonctionnalité de trie d'articles par thème; DÉBUTÉ
 -  Système d'ajout de commentaires au Articles (Basse Priorité);
 -  Lier les articles à une base de données (Basse Priorité); FAIT
 -  Autres;

----------

### Dernier Commit : ###
----------
#### Version 0.0.2 ####
 -	 Ajout de la base de données;
 -   Ajout du système de connexion;
 -   Ajout d'article via base de données;
 -   Autres petits ajouts;

----------
#### Version 0.0.1 ####
 -	Séparation du fichier **Index.php** -> **Head.php** et **Body.php**;
 -	séparation du fichier **Body.php** -> **Header.php**, le contenu de la pages et **Footer.php**;
 -	Ajout d'un fichier **PageRessources.php** contenant :
	 -	Fonctions de génération des balises `<link>` et `<script>` selon le nombre de fichier à ajouter;
 -  Ajout d'un fichier **PageController.php** contenant :
	 -	Fonctions de gestion des pages avec **Index.php** comme page principale (les autres pages sont générée sur **Index.php** mais change son contenu dynamiquement);
	 -	Fonction de détection des pages non-existantes (Erreur 404);

-------------