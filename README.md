# Travail Pratique #
## Cours : 420-P62-E15 ##

### À Faire : ###
 -  Fichier PHP contenant les datas des articles;
 -  Contenus des différentes pages :
    -  Articles dans la page "Nouvelles";
    -  Formulaire d'inscription;
    -  Page d'ajout d'articles avec connexion nécéssaire pour y accéder;
    -  Champs d'ajout des commentaires au articles;
    -  Champs de connexion;
    -  Page du formulaire de contact;
 -  Fonctionnalité de connexion/déconnexion;
 -  Validation des différents formulaires;
 -  Système d'inscription persistante avec base de données (Priorité Moyenne);
 -  Fonctionnalité de trie d'articles par thème;
 -  Système d'ajout de commentaires au Articles (Basse Priorité);
 -  Lier les articles à une base de données (Basse Priorité);
 -  Autres;

----------

### Dernier Commit : ###
----------
#### Version 0.0.2 ####
 -	 

----------
#### Version 0.0.1 ####
 -	Séparation du fichier **Index.php** -> **Head.php** et **Body.php**;
 -	séparation du fichier **Body.php** -> **Header.php**, **MainMenu.php**, **Content.php** et **Footer.php**;
 -	Ajout d'un fichier **PageRessources.php** contenant :
	 -	Fonctions de génération des balises `<link>` et `<script>` selon le nombre de fichier à ajouter;
 -  Ajout d'un fichier **PageController.php** contenant :
	 -	Fonctions de gestion des pages avec **Index.php** comme page principale (les autres pages sont générée sur **Index.php** mais change son contenu dynamiquement);
	 -	Fonction de détection des pages non-existantes (Erreur 404);

-------------