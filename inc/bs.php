<?php
/**
Bootstrap the page templateer for Sears landing pages!
*/

error_reporting( E_ALL );

define( 'SEARS_INC_PATH', dirname( __FILE__ ) );

define( 'SEARS_MODULE_PATH', SEARS_INC_PATH . '/modules' );

define( 'SEARS_TEMPLATE_PATH', SEARS_INC_PATH . '/templates' );

define( 'SEARS_IMG_BASE_PATH', '/assets/cms' );

define( 'SEARS_CSS_PATH', '/css' );

// debuggin' utilities
require_once( SEARS_INC_PATH . '/util.php' );

// makes a page from the given options
function make_page( $content_file, $options = array() ) {

	$_defaults = array(
		'breadcrumb_text' => basename( dirname( $content_file ) ),
		'css' => false,
		'js' => false,
		'template' => 'tmpl8.php',
	);

	$opts = array_merge( $_defaults, $options );

	extract( $opts ); // bring array elements into the local symbol table

	if ( !file_exists( SEARS_TEMPLATE_PATH . '/' . $template ) ) {
		echo "Template file '{$template}' does not exist. Aborting.";
		exit;
	}

	// here's where we buffer output and output the content area to a file
	ob_start(); // start buffering
	include( $content_file ); // include the content file
	$output = ob_get_contents(); // store the buffered output
	file_put_contents( get_output_file_name( $content_file ), $output ); // write it to a file (and fail silently)
	ob_end_clean(); // stop buffering and empty the buffer

	// now build the page for the browser
	include( SEARS_TEMPLATE_PATH . '/' . $template );

}

// make a name for the output file
function get_output_file_name( $content_file ) {

	// for now, use the directory name of the content file
	$output_file_name = basename( dirname( $content_file ) ) . '.html';

	// and we want to write it back to the same directory as $content_file
	return dirname( $content_file ) . '/' . $output_file_name;
}

// gets image directory relative to webroot for images based on a content file's absolute path
function get_image_dir( $abs_path ) {
	return SEARS_IMG_BASE_PATH . '/' . basename( dirname( $abs_path ) ) . '/';
}
