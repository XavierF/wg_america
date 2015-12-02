<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<!-- NEWS SINGLE POST PAGES -->
<?php if (in_category('News')) : ?>
    <div class="l-col-1">
        <div class="back-to">
            <a href="http://wargamingamerica.com/new_main/?cat=5" class="buttons button-back">
                <span><span><i class="ico ico-back"></i>Back</span></span>
            </a>
        </div>
        <div class="b-latestnews">
            <h2>Latest news</h2>
            <ul class="b-mainnews">
                <!-- QUERY LATEST NEWS POSTS -->
                <?php 
                    $args = array( 'numberposts' => 3, 'category' => 5 );
                    $lastposts = get_posts( $args );
                    foreach($lastposts as $post) : setup_postdata($post); 
                ?>
                <li>
                    <time><?php the_time('j.m') ?></time>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </li>
                <?php endforeach; ?>    
            </ul>
        </div><!-- b-latestnews -->
    </div><!-- l-col-1 --><!--END OF SIDEBAR-->
    <!-- CONTENT AREA BEGINS -->
    <div class="l-col-2">
        <article class="for-editor big-editor">
            <h1><?php the_title(); ?></h2>
            <p class="time"><?php the_time('d.m.y') ?></p>
            <?php the_content(); ?>
        </article>
        <ul class="nav-vacancy-open">
            <li class="nav-vacancy-open-item">
                <div class="vertical-middle-parent">
                    <div class="vertical-middle-container">
                        <div class="vertical-middle-child">
                            
                            <div class="nav-vacancy-open-link_prev"><?php previous_post_link('<strong>%link</strong>'); ?> </div>
                            
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-vacancy-open-item">
                <div class="vertical-middle-parent">
                    <div class="vertical-middle-container">
                        <div class="vertical-middle-child">
                            <span><?php the_title(); ?></span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-vacancy-open-item">
                <div class="vertical-middle-parent">
                    <div class="vertical-middle-container">
                        <div class="vertical-middle-child">
                            
                            <div class="nav-vacancy-open-link_next"><?php next_post_link('<strong>%link</strong>'); ?></div>
                            
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div><!-- .l-col-1 -->
<?php endif; ?>

<!-- BLOG SINGLE POST PAGES -->
<?php if (in_category('Blog')) : ?>
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
    </div><!-- l-col-1 --><!--END OF SIDEBAR-->
    <!-- CONTENT AREA BEGINS -->
    <div class="l-col-2">
        <article class="for-editor big-editor">
            <h1><?php the_title(); ?></h2>
            <p class="time"><?php the_time('d.m.y') ?></p>
            <?php the_content(); ?>
        </article>
        <ul class="nav-vacancy-open">
                <li class="nav-vacancy-open-item">
                    <div class="vertical-middle-parent">
                        <div class="vertical-middle-container">
                            <div class="vertical-middle-child">
                                
                                <div class="nav-vacancy-open-link_prev"><?php previous_post_link('<strong>%link</strong>'); ?> </div>
                                
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-vacancy-open-item">
                    <div class="vertical-middle-parent">
                        <div class="vertical-middle-container">
                            <div class="vertical-middle-child">
                                <span><?php the_title(); ?></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-vacancy-open-item">
                    <div class="vertical-middle-parent">
                        <div class="vertical-middle-container">
                            <div class="vertical-middle-child">
                                
                                <div class="nav-vacancy-open-link_next"><?php next_post_link('<strong>%link</strong>'); ?></div>
                                
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
    </div><!-- .l-col-1 -->
<?php endif; ?>

<!--  CAREERS SINGLE POST PAGES -->
<?php if (in_category('Careers')) : ?>
        <div class="l-col-2">
            
            <h2><?php the_title(); ?></h2>
            <article class="for-editor big-editor">
                <?php the_content(); ?>
            </article>
            
            <?php /* <ul class="nav-vacancy-open">
                <li class="nav-vacancy-open-item">
                    <div class="vertical-middle-parent">
                        <div class="vertical-middle-container">
                            <div class="vertical-middle-child">
                                
                                <div class="nav-vacancy-open-link_prev"><?php previous_post_link('<strong>%link</strong>', '%title', TRUE, '4'); ?> </div>
                                
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-vacancy-open-item">
                    <div class="vertical-middle-parent">
                        <div class="vertical-middle-container">
                            <div class="vertical-middle-child">
                                <span><?php the_title(); ?></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-vacancy-open-item">
                    <div class="vertical-middle-parent">
                        <div class="vertical-middle-container">
                            <div class="vertical-middle-child">
                                
                                <div class="nav-vacancy-open-link_next"><?php next_post_link('<strong>%link</strong>', '%title', TRUE, '4'); ?></div>
                                
                            </div>
                        </div>
                    </div>
                </li>
            </ul> */ ?>
        </div>
<?php endif; ?>