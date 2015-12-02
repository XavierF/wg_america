<?php
/**
 * Template Name: Sidebar Template
 * Description: A Page Template that adds a sidebar to pages
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div class="middle">
    <div class="middle-hd">
        
        <h1 class="m-title">About Us</h1>
        
    </div>
    <div class="l-col-1">
        <!-- LEFT MENU -->
        <?php get_sidebar(); ?>
    </div>
    <div class="l-col-2">
        <article class="for-editor">
            <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>
        </article>
    </div>
</div>

<?php get_footer(); ?>