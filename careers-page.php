<?php
/**
 * Template Name: Career Pages 
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

<div class="middle m-middle-1">
    <div class="header-vacancy">
        <div class="header-vacancy-title">
            <h2>Emeryville, CA</h2>
            <script>
                $(document).ready(function(){
                    var animationRunning = false;
                    $('#office_selector').click(function(){
                        var selector = $(this).parent().parent();
                        var selectorList = selector.find('.b-office-selector_list');
                        var menu = $(".l-col-1").find(".b-sidenav");
                        if(!animationRunning)
                        {
                            animationRunning = true;
                            if( selector.hasClass('js-open'))
                            {
                                selectorList.slideUp(300);
                                selector.removeClass('js-open');
                                menu.animate({marginTop: 0},300).queue(function(next){animationRunning = false; next();});

                            }else{
                                selectorList.show();
                                selector.addClass('js-open');
                                var pillow = 20;
                                var positionTopThis = selector.offset().top;
                                var positionBotThis = selector.innerHeight() + positionTopThis;
                                var positionTopMenu = menu.offset().top;
                                var positionDelta = positionBotThis - positionTopMenu + pillow;
                                selectorList.hide();
                                selectorList.slideDown(300);
                                if((positionTopMenu - positionBotThis) < pillow)
                                {
                                    menu.animate({marginTop: positionDelta},300).queue(function(next){animationRunning = false; next();});
                                }
                            };
                        };
                        return false;
                    });
                    $('#office_selector').click(function(){
                        var pulldown = $(this).parent().parent();
                        if( pulldown.hasClass('js-open'))
                        {
                            pulldown.removeClass('js-open');
                        }
                    });
                });
            </script>
            <div class="b-office-selector-wrpr">
               <ul class="b-office-selector">
                    <li><a href="" id="office_selector" class="b-office-selector-parent"><span>Select other region</span></a></li>  
                    <li class="b-office-selector_list"><a href="#">San Francisco, CA</a></li>
                    <li class="b-office-selector_list"><a href="http://www.wargaming.com/en/careers/office/3/" target="_blank">Ukraine, Kiev</a></li>
                    <li class="b-office-selector_list"><a href="http://www.wargaming.com/en/careers/office/4/" target="_blank">Russia, St. Petersburg</a></li>
                    <li class="b-office-selector_list"><a href="http://www.wargaming.com/en/careers/office/5/" target="_blank">EU - France, Paris</a></li>
                </ul>
            </div> 
        </div>
        <div class="header-vacancy-contacts">
            <p>6550 Vallejo St &mdash; S 201, Emeryville, CA 94608</p>
            <p class="show-all show-all_heightauto">
                <a target="_blank" href="http://goo.gl/maps/IdclV">How to find us</a>
            </p>
        </div>
    </div>
    <div class="b-vacancy-page">
        <div class="l-col-1">
            <script type="text/javascript">
                $(document).ready(function()
                {
                    $('.sidenav-parent').click(function()
                    {
                      $(this).parent().toggleClass('open-sidenav').toggleClass('close-sidenav');
                        return false;
                    })
                });
            </script>
            <ul class="b-sidenav b-sidenav__vacancy">
                <li class="open-sidenav">
                    <a href="#vacancy-list-1" class="sidenav-parent">
                        <span>Customer Service</span>
                    </a>
                    <ul id="vacancy-list-26">
                        <?php 
                            $args = array( 'numberposts' => 99, 'category' => 11 );
                            $lastposts = get_posts( $args );
                            foreach($lastposts as $post) : setup_postdata($post); 
                        ?>         
                            <li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></li>
                        <?php endforeach; ?>   
                    </ul>
                </li>
                <li class="open-sidenav">
                    <a href="#vacancy-list-1" class="sidenav-parent">
                        <span>Marketing</span>
                    </a>
                    <ul id="vacancy-list-25">
                        <?php 
                            $args = array( 'numberposts' => 99, 'category' => 12 );
                            $lastposts = get_posts( $args );
                            foreach($lastposts as $post) : setup_postdata($post); 
                        ?>         
                            <li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></li>
                        <?php endforeach; ?>   
                    </ul>
                </li>
            </ul>
        </div>
        <div class="l-col-2">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="for-editor big-editor">
                    <h1><?php the_title(); ?></h1>
                    <div class="b-vacancy-page-description">
                        <?php the_content(); ?>
                    </div>    
                </article>
            <?php endwhile; else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>