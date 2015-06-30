<?php
/**
 * Accelerate Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * Patti O'Neill - pdoneill26@gmail.com
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since pdo_webdev
 * @author Patti O'Neill
 */

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
function load_fonts() {
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Rock+Salt');
            wp_enqueue_style( 'googleFonts');
        }
    
    add_action('wp_print_styles', 'load_fonts');

function create_custom_post_types() {
  register_post_type( 'portfolio',
    array (
      'labels' => array(
        'name' => __( 'Portfolio' ),
        'singular_name' => __( 'Portfolio' )
        ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'portfolio'
        ),
      )
    );

  register_post_type( 'email',
    array (
      'labels' => array(
        'name' => __( 'Email' ),
        'singular_name' => __( 'Email' )
        ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array( 'slug' => 'email'
        ),
      )
    );
}
add_action ( 'init', 'create_custom_post_types' );

function remove_comment_fields($fields) {
    unset($fields['email']);
    unset($fields['url']);
    return $fields;
}
add_filter('comment_form_default_fields', 'remove_comment_fields');

function wp_before_admin_bar_render_example() {
 
   global $wp_admin_bar;
   $wp_admin_bar->add_node( array(
       'id' => 'contact-developer',
       'title' => 'Contact Developer',
       'href'  => 'mailto:pdoneill26@gmail.com',
   ) );
}
add_action( 'wp_before_admin_bar_render', 'wp_before_admin_bar_render_example' );

/**
 * Remove the text - 'You may use these <abbr title="HyperText Markup
 * Language">HTML</abbr> tags ...'
 * from below the comment entry box.
 */
add_filter( 'comment_form_defaults', 'afn_custom_comment_form' );
function afn_custom_comment_form($fields) {
  $fields['comment_notes_before'] = ''; // Removes comment before notes
  $fields['comment_notes_after'] = ''; // Removes comment after notes
    return $fields;
}
add_theme_support('post-thumbnails');
