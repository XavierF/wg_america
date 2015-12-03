<div class="l-col-1">
    <div class="header-vacancy" style="padding-left: 20px;">
        <div class="header-vacancy-title">
            <h2>Emeryville, CA</h2>
                <!-- GEOGRAPHIC LOCATION SELECTOR -->
            <div class="b-office-selector-wrpr">
                <ul class="b-office-selector">
                    <li><a href="" id="office_selector" class="b-office-selector-parent"><span>Select other region</span></a></li>  
                    <li class="b-office-selector_list"><a href="http://www.wargaming.com/en/careers/office/3/" target="_blank">Ukraine, Kiev</a></li>
                    <li class="b-office-selector_list"><a href="http://www.wargaming.com/en/careers/office/4/" target="_blank">Russia, St. Petersburg</a></li>
                    <li class="b-office-selector_list"><a href="http://www.wargaming.com/en/careers/office/5/" target="_blank">EU - France, Paris</a></li>
                </ul>
            </div>
            <!-- OFFICE DROPDOWN FUNCTIONALITY -->
            <script>
                $(document).ready(function(){
                    var animationRunning = false;
                    $('#office_selector').click(function(){
                        var selector = $(this).parent().parent();
                        var selectorList = selector.find('.b-office-selector_list');
                        var menu = $(".l-col-1").find(".b-sidenav");
                       
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
                        return false;
                    });
                });
            </script>
        </div><!-- header-vacancy-title -->
    </div><!-- header-vacancy -->

    <!--  DISPLAY CAREER POSTS BY CATEGORY IN A NICE LTITLE ACCORDION  -->
    <ul class="b-sidenav b-sidenav__vacancy" id="vacancy-list">
        
             <?php $args = array( 'posts_per_page' => 10, 'offset'=> 1, 'hierarchical' => true, 'exclude' => '1,3,4,5,20,21,22,23,24' );

                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <li class="postid-<?php the_ID(); ?>">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endforeach; 
                wp_reset_postdata();?>
          
    </ul>

        <!-- ACCORDION FUNCTIONALITY -->
        <script type="text/javascript">
            $(document).ready(function() {
                $('.sidenav-parent').click(function()
                {
                  $(this).parent().toggleClass('open-sidenav').toggleClass('close-sidenav');
                    return false;
                });
            });
        </script>
        <!--  ACTIVE CLASS FUNCTIONALITY -->
         <script type="text/javascript">
            $(document).ready(function(){
                $.each($("ul#vacancy-list li"), function(index, value){
                    var curLinkClass = $(this).attr('class');

                    if($("body").hasClass(curLinkClass)){
                        $(this).addClass("current-menu-item");
                    }
                })
            });

        </script>
</div>
    </div>