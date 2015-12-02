<?php
/**
 * Template Name: News Pages 
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

    <div class="middle">
        <!--<div class="middle-hd">
            
            <h1 class="ms-title"><?php the_title(); ?></h1>
            
        </div>-->

        <?php wp_nav_menu(array( 'sort_column' => 'menu_order', 'menu' => 'News', 'container_class' => 'l-col-1', 'container_id' => 'sidebar-about', 'menu_class' => 'b-sidenav') ); ?>

        <div class="l-col-2">
            <h1 class="ms-title"><?php the_title(); ?></h1>
            <article class="for-editor">
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'page' ); ?>

                <?php endwhile; // end of the loop. ?>
            </article>
        </div>
    </div>

<?php get_footer(); ?>