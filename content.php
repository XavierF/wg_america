<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( is_sticky() ) : ?>
				<hgroup>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<h3 class="entry-format"><?php _e( 'Featured', 'twentyeleven' ); ?></h3>
				</hgroup>
			<?php else : ?>
			
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
			<div class="b-blogsentries">
				<div class="blogsentries__li">
                <div class="ph">
			        <!--<a href="<?php the_permalink(); ?>">
			            <span class="count">
			                    <?php comments_number( $zero, $one, $more ); ?>
			                <i></i>
			            </span>
			        </a>-->
			        <a href="<?php the_permalink(); ?>">
			            <?php the_post_thumbnail('thumbnail'); ?>
			        </a>
			    </div>
			    <article class="txt">
			        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			        <p class="time"></p>
			        <p class="blogsentries__txt"><span><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></span></p>
			    </article>
			    </div>
			</div>
		<?php endif; ?>

		
	</article><!-- #post-<?php the_ID(); ?> -->
