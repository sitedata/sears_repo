<?php
require_once( $_SERVER['DOCUMENT_ROOT'] . '/inc/bs.php' );

$page_content = dirname( __FILE__ ) . '/page-content.php';

$page_breadcrumb_text = 'Example Breadcrumb';

make_page( $page_content, $page_breadcrumb_text );
