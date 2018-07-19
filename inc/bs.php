<?php
/**
Bootstrap the page templateer for Sears landing pages!
*/

error_reporting( E_ALL );

define( 'SEARS_BASE_PATH', $_SERVER['DOCUMENT_ROOT'] );

define( 'SEARS_INC_PATH', dirname( __FILE__ ) );

define( 'SEARS_MODULE_PATH', SEARS_INC_PATH . '/modules' );

define( 'SEARS_TEMPLATE_PATH', SEARS_INC_PATH . '/templates' );

define( 'SEARS_ELEMENT_PATH', SEARS_BASE_PATH . '/page-elements' );

define( 'SEARS_IMG_BASE_PATH', '/assets/cms' );

define( 'SEARS_CSS_PATH', '/css' );

/**
If the path the current landing page was not defined, define it here!
*/
if ( !defined( 'SEARS_PROJECT_PATH' ) ) {
	define( 'SEARS_PROJECT_PATH', dirname( $_SERVER['SCRIPT_FILENAME'] ) );
}

// debuggin' utilities
require_once( SEARS_INC_PATH . '/util.php' );

// functions!
require_once( SEARS_INC_PATH . '/functions.php' );
