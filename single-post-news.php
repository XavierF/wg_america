<?php
/*
Template Name Posts: News Posts
*/

get_header(); ?>

    <div class="middle">
        <?php wp_nav_menu(array( 'sort_column' => 'menu_order', 'menu' => 'News', 'container_class' => 'l-col-1', 'container_id' => 'sidebar-about', 'menu_class' => 'b-sidenav') ); ?>
        <?php /* <div class="l-col-1">
            <!--<div class="back-to">
                <a href="http://wargamingamerica.com/new_main/?cat=5" class="buttons button-back">
                    <span><span><i class="ico ico-back"></i>Back</span></span>
                </a>
            </div>-->
            <!-- SIDEBAR BEGINS -->
            <div class="b-latestnews">
                <h2>Latest news</h2>
                <ul class="b-mainnews">
                    <!-- QUERY LATEST NEWS POSTS -->
                    <?php 
                        $args = array( 'numberposts' => 2, 'category' => 5 );
                        $lastposts = get_posts( $args );
                        foreach($lastposts as $post) : setup_postdata($post); 
                    ?>
                    <li>
                        <time><?php the_time('j.m') ?></time>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </li>
                    <?php endforeach; ?>    
                </ul>
                <h2>Events</h2>
                <ul class="b-mainnews">
                    <!-- QUERY LATEST NEWS POSTS -->
                    <?php 
                        $args = array( 'numberposts' => 2, 'category' => 20 );
                        $lastposts = get_posts( $args );
                        foreach($lastposts as $post) : setup_postdata($post); 
                    ?>
                    <li>
                        <time><?php the_time('j.m') ?></time>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </li>
                    <?php endforeach; ?>    
                </ul>
                <h2>Press Releases</h2>
                <ul class="b-mainnews">
                    <!-- QUERY LATEST NEWS POSTS -->
                    <?php 
                        $args = array( 'numberposts' => 2, 'category' => 21 );
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
        </div><!--END OF SIDEBAR--> */ ?>
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