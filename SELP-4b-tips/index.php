<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/inc/bs.php' );

$slug = basename( dirname( __FILE__ ) );

$prod_slug = '2018-09-05_Time-Saving-Dinner-Tips';
set_prod_img_dir( $prod_slug );

if ( !defined( 'SEARS_USE_SANDBOX_ASSETS' ) ) {
  define( 'SEARS_USE_SANDBOX_ASSETS', true );
  // define( 'SEARS_USE_SANDBOX_ASSETS', false );
}


$page_content = dirname( __FILE__ ) . '/page-content.php';

$options = array(
  'breadcrumb_text' => array(
    'Time-saving Dinner Tips',
  ),
  'css' =>  get_relative_path( dirname( __FILE__ ) . '/' . $slug . '.css' ),
  'write_html' => true,
);

make_page( $page_content, $options );
