<?php

// Stormbringer initialization
require_once locate_template('/inc/init.php');


// ********************************************
// Configuration
// ********************************************


if ( ! isset( $content_width ) )
	$content_width = 940; // Content width, in pixels


// ********************************************
// Libraries (comment line to remove a library)
// ********************************************

add_theme_support('libraries',
	array(
		'modernizr' => '2.8.3',
		'html5shiv' => '3.7.3',
		'respond' => '1.4.2',
		'lessjs' => '2.5.0',
		'selectivizr' => '1.0.2',
		'bootstrap' => '3.3.6',
		'bootstrap-select' => '1.7.5',
		'jquery' => '1.11.3',
		//'jquery-cycle' => '3.03',
		//'jquery-easing' => '1.3',
		//'jquery-mousewheel' => '3.1.12',
		//'jquery-validate' => '1.13.1',
		//'jquery-cookie' => '1.4.1',
	)
);
