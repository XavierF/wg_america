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
    <ul class="b-sidenav b-sidenav__vacancy">
        <?php
        // get all the categories from the database
        $cats = get_categories( array('hide_empty' => 1, 'name' => 'select_name', 'hierarchical' => true, 'exclude' => '1,3,4,5,24,21,22,23,20') ); 

            // loop through the categries
            foreach ($cats as $cat) {
                // setup the cateogory ID
                $cat_id= $cat->term_id;
                // CAREER CATEGORIES AND DROPDOWN TOGGLE
                echo "<li class='open-sidenav'><a href='#vacancy-list-1' class='sidenav-parent'><span>".$cat->name."</span></a><ul id='vacancy-list-26'>";
                // create a custom wordpress query
                query_posts("cat=$cat_id&post_per_page=25");
                // start the wordpress loop!
                rewind_posts();

                if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php // create our link now that the post is setup ?>
                    <li class="postid-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php echo '</li>'; ?>

                <?php endwhile; endif; // done our wordpress loop. Will start again for each category ?>
            </ul>
            <?php } // done the foreach statement ?>
    
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
                $.each($("ul#vacancy-list-26 li"), function(index, value){
                    var curLinkClass = $(this).attr('class');

                    if($("body").hasClass(curLinkClass)){
                        $(this).addClass("current-menu-item");
                    }
                })
            });

        </script>
</div>
    </div>