<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

add_action( 'wp_enqueue_scripts', 'astrabis_style' );
				function astrabis_style() {
					wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
					wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
				}

/**
 * Your code goes below.
 */
?>
 <?php
// Supprimer le header d’Astra
add_action('wp', function() {
    remove_action('astra_header', 'astra_header_markup');
});

// Supprimer le footer d’Astra
add_action('wp', function() {
    remove_action('astra_footer', 'astra_footer_markup');
});
