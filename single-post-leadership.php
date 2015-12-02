<?php
/*
Template Name Posts: Leadership Posts
*/

get_header(); ?>

    <div class="middle">
        <?php wp_nav_menu(array( 'sort_column' => 'menu_order', 'menu' => 'About Us', 'container_class' => 'l-col-1', 'container_id' => 'sidebar-about', 'menu_class' => 'b-sidenav') ); ?>
        <div class="l-col-2">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="for-editor big-editor">
                <h1><?php the_title(); ?></h2>
                <p class="time"><?php the_time('d.m.y') ?></p>
                <?php the_content(); ?>
            </article>
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        
        </div><!-- .l-col-1 -->
    </div><!-- .middle -->

<?php get_footer(); ?>