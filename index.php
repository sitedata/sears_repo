<?php
/**
Something so we don't have to show a directory listing to people.
*/

require_once( 'inc/bs.php' );

build_index();

make_page( dirname( __FILE__ ) . '/pages.php', array( 'breadcrumb_text' => 'Landing Pages' ) );
