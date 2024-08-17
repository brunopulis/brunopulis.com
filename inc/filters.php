<?php

// XSS HTTP/HTTPS Sanitization

add_filter('init', 'xssHandling');

function xssHandling() {
  foreach(array($_GET, $_POST, $_REQUEST) as $httpConst) XSSSanitization( $httpConst );
}

function XSSSanitization(&$param) {
  if(!is_array( $param ) && is_string( $param ) ) $param = filter_var($param, FILTER_SANITIZE_STRING);
  else if( is_array( $param ) ) foreach( $param as $key => $value ) XSSSanitization( $param[$key] );
}

// Escapando todos os helpers do WordPress
add_filter('the_content', 'wp_kses_post');
add_filter('the_title', 'esc_html');
add_filter('the_excerpt', 'esc_html');
add_filter('the_permalink', 'esc_url');

add_filter('get_the_content', 'wp_kses_post');
add_filter('get_the_title', 'esc_html');
add_filter('get_the_excerpt', 'esc_html');
add_filter('get_the_permalink', 'esc_url');

function clear_nbsp($content){
  return str_replace("<p>&nbsp;</p>","", $content);
}

add_filter('the_content', 'clear_nbsp');
