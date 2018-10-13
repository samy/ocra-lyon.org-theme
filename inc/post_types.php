<?php
function type_sorties() {
  $labels = array(
    'name'               => 'Sorties',
    'singular_name'      => 'Sortie',
    'add_new'            => 'Ajouter',
    'add_new_item'       => 'Ajouter',
    'edit_item'          => 'Modifier',
    'new_item'           => 'Nouvelle',
    'all_items'          => 'Toutes les sorties',
    'view_item'          => 'Voir la sortie',
    'search_items'       => 'Chercher une sortie',
    'not_found'          => 'Aucune sortie trouvée',
    'not_found_in_trash' => 'Aucune sortie trouvée',
    'parent_item_colon'  => '',
    'menu_name'          => 'Sorties'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'sortie' ),
    'capability_type'    => 'page',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
  );

  register_post_type( 'sortie', $args );
}
add_action( 'init', 'type_sorties' );