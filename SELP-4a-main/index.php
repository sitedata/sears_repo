<?php

// if ( !defined( 'SEARS_USE_SANDBOX_ASSETS' ) ) {
//   // define( 'SEARS_USE_SANDBOX_ASSETS', true );
//   define( 'SEARS_USE_SANDBOX_ASSETS', false );
// }

// require_once( $_SERVER['DOCUMENT_ROOT'] . '/inc/bs.php' );

// $slug = basename( dirname( __FILE__ ) );

$slug = basename( SEARS_PROJECT_PATH );

$prod_slug = '2018-09-05_Fall-Meal-Planning-Ideas/';

$page_content = dirname( __FILE__ ) . '/page-content.php';

$img_dir = $slug . '/images';

$prod_img_dir = SEARS_SANDBOX_ASSETS_BASE_URL .  '2018-09-05_Fall-Meal-Planning-Ideas/';

set_prod_img_dir( $prod_slug );

$options = array(
  'breadcrumb_text' => array(
    'Meal Planning Ideas',
  ),
  'css' =>  get_relative_path( dirname( __FILE__ ) . '/' . $slug . '.css' ),
);

make_page( $page_content, $options );
