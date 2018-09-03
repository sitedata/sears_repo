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

define( 'SEARS_SANDBOX_ASSETS_BASE_URL',
	'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered' );

/**
SANDBOX DIRECTORY URLS FOR BRAND LOGOS AND icons
*/
// URL of directory where brand logos live in Sears Sandbox environment (SSE)
define( 'SEARS_SANDBOX_BRAND_LOGOS_DIR',
	SEARS_SANDBOX_ASSETS_BASE_URL . '/brand-logos/logos/' );

// URL of directory where icon images live in SSE
define( 'SEARS_SANDBOX_ICONS_DIR',
	SEARS_SANDBOX_ASSETS_BASE_URL . '/icons/' );

/**
LOCAL DIRECTORY URLS FOR BRAND LOGOS AND ICONS
*/
define( 'SEARS_LOCAL_BRAND_LOGOS_DIR',
	SEARS_IMG_BASE_PATH . '/brand-logos/' );

define( 'SEARS_LOCAL_ICONS_DIR',
	SEARS_IMG_BASE_PATH . '/icons/' );


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
