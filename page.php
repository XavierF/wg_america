<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div class="middle">
        <div class="middle-hd">
            
            <h1 class="m-title"><?php the_title(); ?></h1>
            
        </div>
        <div class="l-col-1">
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