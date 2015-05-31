<?php
    // Menu Items
    $main_menu = array(
        'Accueil' 		=> '?Page=Accueil',
        'Information' 	=> '?Page=Information',
        'Contact'		=> '?Page=Contact',
        'Inscription' 	=> '?Page=Inscription'
    );

    $secondary_menu = array(
        'Connexion' 		=> '?Page=Connexion',
        'Photos' 	        => '?Page=Photos',
        'Nouvelles'			=> '?Page=Nouvelles',
    );

    /**
     * Menu Generator function
     * @param string $level ('Main' or 'Secondary')
     * @return string
     */
    function menu_items($level = 'Main'){
        $page_links = '';
        switch ($level) {
            case 'Main':
                global $main_menu;
                // Main menu items Output
                $page_links .= '<ul>';
                foreach ($main_menu as $titre => $link) {
                    $page_links .= "<li><a href='Index.php$link'>$titre</a></li>";
                }
                $page_links .= '</ul>';
                break;

            case 'Secondary':
                global $secondary_menu;
                // Secondary menu items Output
                $page_links .= '<ul>';
                foreach ($secondary_menu as $titre => $link) {
                    $page_links .= "<li><a href='Index.php$link'>$titre</a></li>";
                }
                $page_links .= '</ul>';
                break;
        }
        return $page_links;
    }

    /**
     * Page Redirection function
     * @return string
     */
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

    // Output the specific content to each pages
    function page_content($page_name){


    }
?>