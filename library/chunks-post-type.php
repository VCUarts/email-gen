<?php
// Flush rewrite rules for Chunk types
add_action( 'after_switch_theme', 'bones_flush_rewrite_rules' );

// Flush your rewrite rules
function bones_flush_rewrite_rules() {
  flush_rewrite_rules();
}

// let's create the function for the custom type
function chunks_post_type() { 
  // creating (registering) the custom type 
  register_post_type( 'chunks', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
    // let's now add all the options for this Chunk
    array( 'labels' => array(
      'name' => __( 'Chunks', 'bonestheme' ), /* This is the Title of the Group */
      'singular_name' => __( 'Chunk', 'bonestheme' ), /* This is the individual type */
      'all_items' => __( 'All Chunks', 'bonestheme' ), /* the all items menu item */
      'add_new' => __( 'Add New', 'bonestheme' ), /* The add new menu item */
      'add_new_item' => __( 'Add New Chunk', 'bonestheme' ), /* Add New Display Title */
      'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
      'edit_item' => __( 'Edit Chunks', 'bonestheme' ), /* Edit Display Title */
      'new_item' => __( 'New Chunk', 'bonestheme' ), /* New Display Title */
      'view_item' => __( 'View Chunk', 'bonestheme' ), /* View Display Title */
      'search_items' => __( 'Search Chunk', 'bonestheme' ), /* Search Custom Type Title */ 
      'not_found' =>  __( 'Nothing found in the Database.', 'bonestheme' ), /* This displays if there are no entries yet */ 
      'not_found_in_trash' => __( 'Nothing found in Trash', 'bonestheme' ), /* This displays if there is nothing in the trash */
      'parent_item_colon' => ''
      ), /* end of arrays */
      'description' => __( 'Chunks are reusable bits of content for emails', 'bonestheme' ), /* Custom Type Description */
      'public' => true,
      'publicly_queryable' => true,
      'exclude_from_search' => true,
      'show_ui' => true,
      'query_var' => true,
      'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
      'capability_type' => 'post',
      'hierarchical' => false,
      /* the next one is important, it tells what's enabled in the post editor */
      'supports' => array( 'title', 'editor', 'revisions')
    ) /* end of options */
  ); /* end of register Chunk */
  
}

  // adding the function to the Wordpress init
  add_action( 'init', 'chunks_post_type');
?>