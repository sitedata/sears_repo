<?php

/**
 makes a page from the given options
*/
function make_page( $content_file, $options = array() ) {

	$_defaults = array(
		'breadcrumb_text' => basename( dirname( $content_file ) ),
		'css' => false,
		'js' => false,
		'template' => 'tmpl8.php',
		'inline_css' => true,
	);

	$opts = array_merge( $_defaults, $options );

	extract( $opts ); // bring array elements into the local symbol table

	if ( !file_exists( SEARS_TEMPLATE_PATH . '/' . $template ) ) {
		echo "Template file '{$template}' does not exist. Aborting.";
		exit;
	}

	// here's where we buffer output and output the content area to a file
	ob_start(); // start buffering

	if ( false !== $opts['css'] && false !== $opts['inline_css'] ) {
		echo '<style type="text/css">' . "\n";
		include( SEARS_BASE_PATH . $opts['css'] );
		echo "\n</style>\n";
	}

	include( $content_file ); // include the content file
	$output = ob_get_contents(); // store the buffered output
	file_put_contents( get_output_file_name( $content_file ), $output ); // write it to a file (and fail silently)
	ob_end_clean(); // stop buffering and empty the buffer

	// now build the page for the browser
	include( SEARS_TEMPLATE_PATH . '/' . $template );

}

/**
 make a name for the output file
 */
function get_output_file_name( $content_file ) {

	// for now, use the directory name of the content file
	$output_file_name = basename( dirname( $content_file ) ) . '.html';

	// and we want to write it back to the same directory as $content_file
	return dirname( $content_file ) . '/' . $output_file_name;
}

/**
 gets image directory relative to webroot for images based on a content file's absolute path
 */
function get_image_dir( $abs_path ) {
	return SEARS_IMG_BASE_PATH . '/' . basename( dirname( $abs_path ) ) . '/';
}


/**
 build top-level index page
 */
function build_index( $options = array() ) {
	$_defaults = array(
		'path' => $_SERVER['DOCUMENT_ROOT'],
		'breadcrumb_text' => 'Landing Pages',
		'output_file' => $_SERVER['DOCUMENT_ROOT'] . '/pages.php',
		'page_title' => 'Sears Landing Pages',
		'exclude' => array(
		  '.',
		  '..',
		  '.git',
		  'assets',
		  'cms',
		  'css',
		  'example',
		  'font-awesome',
		  'inc',
		  'notes',
		  'scraped-pages',
		),
	);

	$opts = array_merge_recursive( $_defaults, $options );

	// bring options into local symbol table
	extract( $opts );

	$nodes = scandir( $path );

	$dirs = array();

	foreach( $nodes as $node ) {
	  if ( !is_dir( $node ) || in_array( $node, $exclude ) ) {
	    continue;
	  }
	  $subnodes = scandir( $node );
	  if ( in_array( $node . '.html', $subnodes ) && in_array( 'index.php', $subnodes ) ) {
	    $dirs[] = $node;
	  }
	}

	ob_start();
	?>
	  <div class="container">
	    <h1>Landing Pages</h1>
	    <ul>
	    <?php foreach ( $dirs as $dir ): ?>
	      <li><a href="/<?php echo $dir ?>"><?php echo $dir ?></a></li>
	    <?php endforeach; ?>
	    </ul>
	  </div>
	<?php
	$content = ob_get_contents();
	ob_end_clean();

	return file_put_contents( './pages.php', $content );

}

/**
get path relative to webroot for the given absolute file path
*/
function get_relative_path( $path ) {
  return str_replace( $_SERVER['DOCUMENT_ROOT'], '', $path );
}

/**
Include a reusable page element.
*/
function element( $element_file_name, $vars = array() ) {
	// if variables passed, pull them into the current context
	if ( !empty( $vars ) ) {
		extract( $vars );
	}
	if ( !preg_match( '/.*\.php/', $element_file_name ) ) {
		$element_file_name .= '.php';
	}
	if ( file_exists( SEARS_ELEMENT_PATH . '/' . $element_file_name ) ) {
		include( SEARS_ELEMENT_PATH . '/'. $element_file_name );
	}
}

/**
Clean text by removing non-display characters, replacing special characters with
HTML entities, and replacing newlines with <br>s.
*/
function clean_text( $text ) {
	// replace non-display characters
	$text = replace_non_display_chars( $text );
	$text = htmlspecialchars( $text );
	$text = nl2br( $text );
	return $text;
}

/**
Replace non-display characters (with some exceptions)
*/
function replace_non_display_chars( $text ) {
	// replace non-display characters
	// EXCEPT NEW LINES! \x0A
	$text = preg_replace( '/[\x00-\x09\x0B\x1F\x7F]/u', '', $text );
	return $text;
}
