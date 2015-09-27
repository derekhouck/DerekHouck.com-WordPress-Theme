<?php
if ( function_exists('register_sidebar') )
    register_sidebar();
    
function register_my_menus() {
  register_nav_menus(
    array('header-menu' => __( 'Header Menu' ) )
  );
}
add_action( 'init', 'register_my_menus' );

if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}
/* Loads JavaScript for Cycle2 plugin. Documentation here: http://jquery.malsup.com/cycle2/ */
add_action('init','my_scripts');
function my_scripts() {
wp_enqueue_script(
'cycle2',
get_bloginfo('template_directory') .'/js/jquery.cycle2.min.js',
array('jquery'),
'2.1.6',
false
);
}

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}