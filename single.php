<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div class="middle m-middle-1">
        <div class="b-vacancy-page">
		

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>
					

				<?php endwhile; // end of the loop. ?>
				<?php if (in_category('Careers')) : ?>
					<?php include('sidebar-careers-demo.php'); ?>
				<?php endif; ?>
</div></div>
<?php get_footer(); ?>