<?php
	// Site specific constants
	define('SITE_NAME', 'NewsPaper');
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

    /**
     * CSS links Output function
     * @return string
     */
    function css_files(){
		global $css_directory;
		global $css_files;
		$file = '';
		foreach ($css_files as $key => $value) {
			$file .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"" . $css_directory . $value . "\">";
		}
		return $file;
	}

    /**
     * JS Scripts Output function
     * @return string
     */
    function js_files(){
		global $js_directory;
		global $js_files;
		$file = '';
		foreach ($js_files as $key => $value) {
			$file .= "<script type=\"text/javascript\" src=\"" . $js_directory . $value . "\"></script>";
		}
		return $file;
	}


?>