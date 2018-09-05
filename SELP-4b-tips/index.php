<?php

if ( !defined( 'SEARS_USE_SANDBOX_ASSETS' ) ) {
  // define( 'SEARS_USE_SANDBOX_ASSETS', true );
  define( 'SEARS_USE_SANDBOX_ASSETS', false );
}

require_once( $_SERVER['DOCUMENT_ROOT'] . '/inc/bs.php' );

$slug = basename( dirname( __FILE__ ) );

$page_content = dirname( __FILE__ ) . '/page-content.php';

$options = array(
  'breadcrumb_text' => array(
    'Butternut Squash Chicken Chili Recipe',
  ),
  'css' =>  get_relative_path( dirname( __FILE__ ) . '/' . $slug . '.css' ),
);

make_page( $page_content, $options );