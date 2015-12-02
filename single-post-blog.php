<?php
/*
Template Name Posts: Blog
*/

get_header(); ?>

<div class="middle">
    <div class="l-col-1">
        <div class="back-to">
            <a href="http://wargamingamerica.com/new_main/?cat=3" class="buttons button-back">
                <span><span><i class="ico ico-back"></i>Back</span></span>
            </a>
        </div>
        <!-- SIDEBAR BEGINS -->
        <div class="b-latestnews">
            <h2>Latest entries</h2>
            <ul class="b-mainnews">
                <!-- QUERY LATEST BLOG POSTS -->
                <?php 
                    $args = array( 'numberposts' => 10, 'category' => 3 );
                    $lastposts = get_posts( $args );
                    foreach($lastposts as $post) : setup_postdata($post); 
                ?>
                <li>
                    <time><?php the_time('j.m') ?></time>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </li>
                <?php endforeach; ?>    
            </ul>
        </div>
    </div><!--END OF SIDEBAR-->
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