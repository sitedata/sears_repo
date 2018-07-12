<?php
/**
Bootstrap the page templateer for Sears landing pages!
*/

error_reporting( E_ALL );

define( 'SEARS_INC_PATH', dirname( __FILE__ ) );

define( 'SEARS_MODULE_PATH', SEARS_INC_PATH . '/modules' );

define( 'SEARS_TEMPLATE_PATH', SEARS_INC_PATH . '/templates' );

// debuggin' utilities
require_once( SEARS_INC_PATH . '/util.php' );

function make_page( $content_file, $breadcrumb_text = 'This Page', $tmpl8 = 'tmpl8.php' ) {


	if ( !file_exists( SEARS_TEMPLATE_PATH . '/' . $tmpl8 ) ) {
		echo "Template file '{$tmpl8}' does not exist. Aborting.";
		exit;
	}

	// here's where we buffer output and output the content area to a file
	ob_start(); // start buffering
	include( $content_file ); // include the content file
	$output = ob_get_contents(); // store the buffered output
	file_put_contents( get_output_file_name( $content_file ), $output ); // write it to a file (and fail silently)
	ob_end_clean(); // stop buffering and empty the buffer

	// now build the page for the browser
	include( SEARS_TEMPLATE_PATH . '/' . $tmpl8 );

}

// make a name for the output file
function get_output_file_name( $content_file ) {

	// for now, use the directory name of the content file
	$output_file_name = basename( dirname( $content_file ) ) . '.html';

	// and we want to write it back to the same directory as $content_file
	return dirname( $content_file ) . '/' . $output_file_name;
}
