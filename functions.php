<?php
/**
 * Default function file
 * @package sampression framework v 1.0
 * @theme naya 1.0
 */
if ( ! defined('ABSPATH')) exit('restricted access');

require_once( dirname( __FILE__ ) . '/inc/init.php' );

//$attachment_id = 17;
//$fullsizepath = get_attached_file( $attachment_id );
//$metadata = wp_generate_attachment_metadata( $attachment_id, $fullsizepath );
//include( ABSPATH . 'wp-admin/includes/image.php' );
//wp_generate_attachment_metadata( $attachment_id, $fullsizepath );
//wp_update_attachment_metadata( $attachment_id, $metadata );
//remove_action('sampression_footer_widget', 'sam_hook_footer_widget');
//
//remove_action('sampression_after_body', 'sam_hook_after_body');
//add_action('sampression_after_body', 'sam_hook_after_body_new_call');
//function sam_hook_after_body_new_call() {
//    echo 'Hello World';
//}


/*
 * 
 * //Working Code below
function restrict_books_by_genre() {
    global $typenow;
    $post_type = 'books'; // change HERE
    $taxonomy = 'genre'; // change HERE
    if ($typenow == $post_type) {
            $selected = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
            $info_taxonomy = get_taxonomy($taxonomy);
            wp_dropdown_categories(array(
                    'show_option_all' => __("Show All {$info_taxonomy->label}"),
                    'taxonomy' => $taxonomy,
                    'name' => $taxonomy,
                    'orderby' => 'name',
                    'selected' => $selected,
                    'show_count' => true,
                    'hide_empty' => true,
            ));
    };
}

add_action('restrict_manage_posts', 'restrict_books_by_genre');

function convert_id_to_term_in_query($query) {
    global $pagenow;
    $post_type = 'books'; // change HERE
    $taxonomy = 'genre'; // change HERE
    $q_vars = &$query->query_vars;
    if ($pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0) {
            $term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
            $q_vars[$taxonomy] = $term->slug;
    }
}

add_filter('parse_query', 'convert_id_to_term_in_query');*/