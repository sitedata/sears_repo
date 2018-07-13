<?php
/**
 Utitlity Functions
 */

/**
get path relative to webroot for the given absolute file path
*/
function get_relative_path( $path ) {
  return str_replace( $_SERVER['DOCUMENT_ROOT'], '', $path );
}

/**
prints or returns a print_r statement wrapped in a <pre>
*/
if ( !function_exists( 'pr' ) ) {
  function pr( $data, $return = false ) {
    $out = "\n<pre style=\"text-align: left;\">\n" . print_r( $data, true ) . "\n</pre>\n";
    if ( false !== $return ) {
      return $out;
    }
    else {
      echo $out;
    }
  }
}

/**
Wrap $data in an <h1-6> and either echoes or optionally returns.
$data - String or Number (all other types cast to string via print_r() )
$return - Bool
$heading_size - Integer >= 1 & <= 6
*/
if ( !function_exists( 'eh' ) ) {
  function eh( $data, $return = false, $heading_size = 1 ) {
    $heading_size = ( is_int( $heading_size ) && 1 <= $heading_size && 6 >= $heading_size ) ? $heading_size : 1;
    if ( !is_string( $data ) && !is_numeric( $data ) ) {
      $data = print_r( $data, true );
    }
    $data = "\n<h{$heading_size}>" . $data . "</h{$heading_size}>\n";
    if ( false === $return ) {
      echo $data;
    }
    else {
      return $data;
    }
  }
}

/**
Wrapper for print_r that always returns instead of echoing immediately
*/
if ( !function_exists( 'rpr' ) ) {
  function rpr( $data ) {
    return print_r( $data, true );
  }
}

/**
Combines eh() and pr() into one magic doodad!
Expects array of data keyed by the label to be used by eh().
For best awesome, use compact when invoking, e.g., erp( compact( 'my_data_array_variable_name' ) );
*/
if ( !function_exists( 'erp' ) ) {
  function erp( $data_wrapper ) {
    foreach( $data_wrapper as $k => $v ) {
      eh( $k );
      pr( $v );
    }
  }
}
