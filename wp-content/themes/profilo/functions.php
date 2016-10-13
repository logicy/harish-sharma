<?php

add_action( 'init', 'create_post_type_home_para' );
function create_post_type_home_para() {
  register_post_type( 'para',
    array(
      'labels'          => array(
        'name'              => __( 'home para' ),
        'singular_name'     => __( 'home para' ),
        'add_new_item'      => __( 'Add home para' ),
        'new_item'          => __( 'New home para' ),
        'view_item'         => __( 'View home para' ),
        'all_items'         => __( 'All home para' ),
        'insert_into_item'  => __( 'Insert into home para' ),
        'search_items'      => __( 'Search home para' ),
        'not_found'         => __( 'No home para found' ),
        'not_found_in_trash'=> __( 'No home para found in trash' )
      ),
      'menu_position'   => 5,
      'menu_icon'       => 'dashicons-megaphone',//url or dashicon here for icon.png
      'description'     => 'home para items for your website/products.',
      'supports'        => array(//to add various supports: for featured-images=thumbnails
          'title','editor','author'/*,'thumbnail'*/,'custom-fields'
      ),
      'taxonomies'      => array('category'),
      'public'          => true,
      'has_archive'     => true,
    )
  );
}
