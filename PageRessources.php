<?php
	// CSS Path Variables
	$css_directory = 'Css/';
	$css_files = array(
		'Main.css',
		'Mobile.css',
		'Desktop.css'
	);

	// JS Path Variables
	$js_directory = 'Js/';
	$js_files = array(
		'Variables.js',
		'Functions.js',
		'Calls.js'
	);
	
	// Menu Items
	$main_menu = array(
		'Accueil' 		=> '?Page=Accueil',
		'Information' 	=> '?Page=Information',
		'Contact'		=> '?Page=Contact',
		'Inscription' 	=> '?Page=Inscription'
	);

	$secondary_menu = array(
		'Connexion' 		=> '?Page=Connexion',
		'Galerie Photos' 	=> '?Page=Galerie Photos',
		'Nouvelles'			=> '?Page=Nouvelles',
	);

	// CSS links Output function
	function css_files(){
		global $css_directory;
		global $css_files;
		$file = '';
		foreach ($css_files as $key => $value) {
			$file .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . $css_directory . $value . "\">";
		}
		return $file;
	}

	// JS Scripts Output function
	function js_files(){
		global $js_directory;
		global $js_files;
		$file = '';
		foreach ($js_files as $key => $value) {
			$file .= "<script type=\"text/javascript\" src=\"" . $js_directory . $value . "\"></script>";
		}
		return $file;
	}

	// Menu Generator function
	function menu_items($level = 'Main'){
		$page_link = '';
		switch ($level) {
			case 'Main':
				global $main_menu;
				// Main menu items Output
				$page_link .= '<ul>';
				foreach ($main_menu as $titre => $link) {
					$page_link .= "<li><a href='Index.php$link'>$titre</a></li>";
				}
				$page_link .= '</ul>';
			break;
			
			case 'Secondary':
				global $secondary_menu;
				// Secondary menu items Output
				$page_link .= '<ul>';
				foreach ($secondary_menu as $titre => $link) {
					$page_link .= "<li><a href='Index.php$link'>$titre</a></li>";
				}
				$page_link .= '</ul>';
			break;
		}
		return $page_link;
	}

	function page_navigation(){
		global $main_menu;
		global $secondary_menu;
		if(isset($_GET['Page'])){
			if(array_key_exists($_GET['Page'], $main_menu) || array_key_exists($_GET['Page'], $secondary_menu)){
				return $_GET['Page'];
			}
			else{
				$_GET['Page'] = '404';
				return $_GET['Page'];
			}
		}
		else{
			return 'Accueil';
		}
	}
	function page_content($page_name){
		$content = '';
		switch($page_name){
			case 'Accueil':
				$content .= "<h2>Bienvenue sur mon site Portfolios</h2>";
				return $content;
				break;
			case 'Information':
				$content .= "<h2>À Propos de moi</h2>";
				return $content;
				break;
			case 'Contact':
				$content .= "<h2>Me Contacter</h2>";
				return $content;
				break;
			case 'Inscription':
				$content .= "<h2>Vous voulez vous inscrire pour accéder à plus de contenus?</h2>";
				return $content;
				break;
			case 'Connexion':
				$content .= "<h2>Vous voulez vous connecter?</h2>";
				return $content;
				break;
			case 'Galerie Photos':
				$content .= "<h2>Photos de différents projets</h2>";
				return $content;
				break;
			case 'Nouvelles':
				$content .= "<h2>Voici l'actualité de la dernière heure</h2>";
				return $content;
				break;
			default:
				$content .= "<h2>La page que vous cherchez n'existe pas...</h2>";
				return $content;
				break;
		}
	}
?>