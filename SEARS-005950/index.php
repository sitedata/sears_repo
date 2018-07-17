<?php

require_once( $_SERVER['DOCUMENT_ROOT'] . '/inc/bs.php' );

$slug = 'SEARS-005950';

$page_content = dirname( __FILE__ ) . '/page-content.php';

$options = array(
  'breadcrumb_text' => 'Laundry Essentials',
  'css' =>  get_relative_path( dirname( __FILE__ ) . '/' . $slug . '.css' ),
);


make_page( $page_content, $options );
