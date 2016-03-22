<?php

// Register Custom Taxonomy
function artist_taxonomy() {

  $labels = array(
    'name'                       => _x( 'Artists', 'Taxonomy General Name', 'text_domain' ),
    'singular_name'              => _x( 'Artist', 'Taxonomy Singular Name', 'text_domain' ),
    'menu_name'                  => __( 'Artist', 'text_domain' ),
    'all_items'                  => __( 'All Artists', 'text_domain' ),
    'parent_item'                => __( 'Parent Artist', 'text_domain' ),
    'parent_item_colon'          => __( 'Parent Artist:', 'text_domain' ),
    'new_item_name'              => __( 'New Artist Name', 'text_domain' ),
    'add_new_item'               => __( 'Add New Artist', 'text_domain' ),
    'edit_item'                  => __( 'Edit Artist', 'text_domain' ),
    'update_item'                => __( 'Update Artist', 'text_domain' ),
    'view_item'                  => __( 'View Artist', 'text_domain' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
    'popular_items'              => __( 'Popular Artists', 'text_domain' ),
    'search_items'               => __( 'Search Artists', 'text_domain' ),
    'not_found'                  => __( 'Not Found', 'text_domain' ),
    'no_terms'                   => __( 'No items', 'text_domain' ),
    'items_list'                 => __( 'Artists list', 'text_domain' ),
    'items_list_navigation'      => __( 'Artists list navigation', 'text_domain' ),
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );
  register_taxonomy( 'artist', array( 'post' ), $args );

}
add_action( 'init', 'artist_taxonomy', 0 );
?>
