<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/inc/bs.php' );

$slug = 'SEARS-005950';

$page_content = dirname( __FILE__ ) . '/page-content.php';

$options = array(
  'breadcrumb_text' => 'Cooking Essentials',
  'css' =>  get_relative_path( dirname( __FILE__ ) . '/' . $slug . '.css' ),
  'js' => get_relative_path( dirname( __FILE__ ) . '/' . $slug . '.js' ),
);


make_page( $page_content, $options );
