<?php
/**
To use sandbox image URLs, add a query string with the variable name 'sb'.
-OR-
Uncomment the 3 lines below this comment block to define the constant
'SEARS_USE_SANDBOX_ASSETS' with the value 'true'
*/
if ( !defined( 'SEARS_USE_SANDBOX_ASSETS' ) ) {
  define( 'SEARS_USE_SANDBOX_ASSETS', true );
}

$slug = basename( SEARS_PROJECT_PATH );
$img_dir = $slug . '/images';

// this is the directory name for images in the Sandbox environment
$prod_slug = '2018-09-05_Fall-Meal-Planning-Ideas/';
set_prod_img_dir( $prod_slug );

$page_content = dirname( __FILE__ ) . '/page-content.php';


$options = array(
  'breadcrumb_text' => array(
    'Meal Planning Ideas',
  ),
  'css' =>  get_relative_path( dirname( __FILE__ ) . '/' . $slug . '.css' ),
);

make_page( $page_content, $options );
