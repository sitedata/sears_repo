<?php

$page_content = dirname( __FILE__ ) . '/content__cooking-essentials.php';

$page_breadcrumb_text = 'Cooking Essentials';

require_once( $_SERVER['DOCUMENT_ROOT'] . '/inc/bs.php' );

make_page( $page_content, $page_breadcrumb_text );
