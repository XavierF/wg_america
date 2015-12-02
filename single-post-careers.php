<?php
/*
Template Name Posts: Career Pages
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
                });
            </script>
            <div class="b-office-selector-wrpr">
                <ul class="b-office-selector">
                    <li><a href="" id="office_selector" class="b-office-selector-parent"><span>Select other region</span></a></li>  
                    <li class="b-office-selector_list"><a href="#">San Francisco, CA</a></li>
                    <li class="b-office-selector_list"><a href="/en/careers/office/3/">Ukraine, Kiev</a></li>
                    <li class="b-office-selector_list"><a href="/en/careers/office/4/">Russia, St. Petersburg</a></li>
                    <li class="b-office-selector_list"><a href="/en/careers/office/5/">EU - France, Paris</a></li>
                </ul>
            </div> 
        </div>
        <?php /*
        <div class="header-vacancy-contacts">
            <p>6550 Vallejo St &mdash; S 201, Emeryville, CA 94608</p>
            <p class="show-all show-all_heightauto">
                <a target="_blank" href="http://goo.gl/maps/IdclV">How to find us</a>
            </p>
        </div>
        */ ?>
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
                            <li<?php if ( $post->ID == $wp_query->post->ID ) { echo ' class="current-menu-item"'; } else {} ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
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
                            <li<?php if ( $post->ID == $wp_query->post->ID ) { echo ' class="current-menu-item"'; } else {} ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endforeach; ?>   
                    </ul>
                </li>
            </ul>
        </div>
        <div class="l-col-2">
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <h2><?php the_title(); ?></h2>
            <article class="for-editor big-editor">
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
        </div>
        <?php endwhile; endif; ?>
    </div>
</div>

<?php get_footer(); ?>