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

define( 'SEARS_IMG_BASE_PATH', '/assets/cms/purered' );

define( 'SEARS_CSS_PATH', '/css' );

define( 'SEARS_SANDBOX_ASSETS_BASE_URL',
	'http://hometown.sb3.production.netsuitestaging.com/assets/cms/purered' );

/**
SANDBOX DIRECTORY URLS FOR BRAND LOGOS AND icons
*/
// URL of directory where brand logos live in Sears Sandbox environment (SSE)
define( 'SEARS_SANDBOX_BRAND_LOGOS_DIR',
	SEARS_SANDBOX_ASSETS_BASE_URL . '/brand-logos/' );

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

/**
Check for a query string that tells us to use Sandbox assets.
We may want to put this somewhere else so that it can still be set in index.php...
*/
if ( !defined( 'SEARS_USE_SANDBOX_ASSETS' ) ) {
	if ( isset( $_GET['sb'] ) ||
		isset( $_GET['sandbox'] ) ||
		isset( $_GET['use_sandbox_assets'] ) ) {
		define( 'SEARS_USE_SANDBOX_ASSETS', true );
	}
	// not setting it as a default here allows us to set the constant in index!
	else {
		// define( 'SEARS_USE_SANDBOX_ASSETS', false );
	}
}

// if ( !defined( 'IMG_DIR' ) ) {
// 	if ( use_sandbox() ) {
//
// 	}
// }

// debuggin' utilities
require_once( SEARS_INC_PATH . '/util.php' );

// functions!
require_once( SEARS_INC_PATH . '/functions.php' );
