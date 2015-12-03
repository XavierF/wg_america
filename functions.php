<?php

//UNREGISTER DEFAULT SIDEBAR
  function remove_some_widgets(){

  // Unregsiter some of the TwentyTen sidebars
  unregister_sidebar( 'main-sidebar' );
}
add_action( 'widgets_init', 'remove_some_widgets', 11 );

function wp_theme_t_add_sidebars() {
 
  register_sidebar( array(
    'id'            => 'about-sidebar',
    'name'          => 'About pages Sidebar',
    'description'   => 'Sidebar on About pages',
    'before_widget' => '<div id="%1$s" class="l-col-1 %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '',
    'after_title'   => '',
  ));
  register_sidebar( array(
    'id'            => 'news-sidebar',
    'name'          => 'News pages Sidebar',
    'description'   => 'Sidebar on News pages',
    'before_widget' => '<div id="%1$s" class="l-col-1 %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '',
    'after_title'   => '',
  ));
  register_sidebar( array(
    'id'            => 'careers-sidebar',
    'name'          => 'Career Pages Sidebar',
    'description'   => 'Sidebar on Career pages',
    'before_widget' => '<ul id="%1$s" class="hotvacancies__ul %2$s">',
    'after_widget'  => '</ul>',
    'before_title'  => '',
    'after_title'   => '',
  ));
 
}

add_action( 'widgets_init', 'wp_theme_t_add_sidebars' );
 
function custom_excerpt_length( $length ) {
  return 6;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// REMOVE CONTINUE READING LINK IN EXCERPTS
  // Puts link in excerpts more tag
  function new_excerpt_more($more) {
         global $post;
    return '&nbsp;<i class="ar"></i>';
  }
  add_filter('excerpt_more', 'new_excerpt_more');
  
  function child_theme_setup() {
    // override parent theme's 'more' text for excerpts
    remove_filter( 'excerpt_more', 'twentyeleven_auto_excerpt_more' ); 
    remove_filter( 'get_the_excerpt', 'twentyeleven_custom_excerpt_more' );
  }
  add_action( 'after_setup_theme', 'child_theme_setup' );


// GET TAGS BY CATEGORY
  function get_category_tags($args) {
    global $wpdb;
    $tags = $wpdb->get_results
    ("
      SELECT DISTINCT terms2.term_id as tag_id, terms2.name as tag_name, null as tag_link
      FROM
        wp_posts as p1
        LEFT JOIN wp_term_relationships as r1 ON p1.ID = r1.object_ID
        LEFT JOIN wp_term_taxonomy as t1 ON r1.term_taxonomy_id = t1.term_taxonomy_id
        LEFT JOIN wp_terms as terms1 ON t1.term_id = terms1.term_id,

        wp_posts as p2
        LEFT JOIN wp_term_relationships as r2 ON p2.ID = r2.object_ID
        LEFT JOIN wp_term_taxonomy as t2 ON r2.term_taxonomy_id = t2.term_taxonomy_id
        LEFT JOIN wp_terms as terms2 ON t2.term_id = terms2.term_id
      WHERE
        t1.taxonomy = 'category' AND p1.post_status = 'publish' AND terms1.term_id IN (".$args['categories'].") AND
        t2.taxonomy = 'post_tag' AND p2.post_status = 'publish'
        AND p1.ID = p2.ID
      ORDER by tag_name
    ");
    $count = 0;
    foreach ($tags as $tag) {
      $tags[$count]->tag_link = get_tag_link($tag->tag_id);
      $count++;
    }
    return $tags;
    }



 ?>