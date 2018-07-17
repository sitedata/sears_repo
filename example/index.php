<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/inc/bs.php' );

// store the name of the directory in which this file is located
$slug = basename( dirname( __FILE__ ) );

// append the absolute path of this directory to the content file name
$page_content = dirname( __FILE__ ) . '/page-content.php';

$options = array(
  'breadcrumb_text' => 'Example Breadcrumb',
  // path to CSS file in this directory relative to the webroot
  // CSS file has the same name as this directory, e.g., example.css
  'css' => get_relative_path( dirname( __FILE__ ) . '/' . $slug . '.css' ),
);

make_page( $page_content, $options );
