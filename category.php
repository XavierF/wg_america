<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<!--  NEWS PAGE -->
<?php if (is_category('News')) : ?>
    <div class="middle">
    	<!--<div class="middle-hd">
            <h1 class="ms-title">NEWS</h1>
        </div>-->
    	<?php wp_nav_menu(array( 'sort_column' => 'menu_order', 'menu' => 'News', 'container_class' => 'l-col-1', 'container_id' => 'sidebar-about', 'menu_class' => 'b-sidenav') ); ?>
        <div class="l-col-2">
	        <h1 class="ms-title">NEWS</h1>
	        <div class="b-vacancy-page">
	            <ul class="b-newslist">
					
				    <?php 
					    query_posts(array('category__in' => array(5)));
						while(have_posts()) { the_post(); ?>
						   <li class="newslist__li">
					    <a class="b-news_link" href="<?php the_permalink(); ?>">
					        <time><?php the_time('j.m') ?><br><small><?php the_time('Y') ?></small></time>
					        <span class="b-h2"><?php the_title(); ?></span>
					        <span class="txt"><?php echo get_excerpt(120); ?></span>
					    </a>
					</li>
						<?php } ?>
					
				</ul>  
	        </div>
	    </div>
    </div>
<?php endif; ?>

<!-- EVENTS PAGE -->
<?php if (is_category('Events')) : ?>
    <div class="middle">
    	<div class="middle-hd">
            <h1 class="ms-title">EVENTS</h1>
        </div>
    	<?php wp_nav_menu(array( 'sort_column' => 'menu_order', 'menu' => 'News', 'container_class' => 'l-col-1', 'container_id' => 'sidebar-about', 'menu_class' => 'b-sidenav') ); ?>
        <div class="l-col-2">
	        <?php /* <div class="middle-hd">
	            <h1 class="ms-title" style="text-align: center;">NEWS</h1> 
	        </div> */ ?>
	        <div class="b-vacancy-page">
	            <ul class="b-newslist">
					<?php 
				        $args = array( 'numberposts' => 18, 'category' => 21 );
				        $lastposts = get_posts( $args );
				        foreach($lastposts as $post) : setup_postdata($post); 
				    ?> 
					<li class="newslist__li">
					    <a class="b-news_link" href="<?php the_permalink(); ?>">
					        <time><?php the_time('j.m') ?><br><small><?php the_time('Y') ?></small></time>
					        <span class="b-h2"><?php the_title(); ?></span>
					        <span class="txt"><?php echo get_excerpt(120); ?></span>
					    </a>
					</li>
					<?php endforeach; ?>
				</ul>  
	        </div>
	    </div>
    </div>
<?php endif; ?>

<!-- UPCOMING EVENTS PAGE -->
<?php if (is_category('Upcoming Events')) : ?>
    <div class="middle">
    	<div class="middle-hd">
            <h1 class="ms-title">UPCOMING EVENTS</h1>
        </div>
    	<?php wp_nav_menu(array( 'sort_column' => 'menu_order', 'menu' => 'News', 'container_class' => 'l-col-1', 'container_id' => 'sidebar-about', 'menu_class' => 'b-sidenav') ); ?>
        <div class="l-col-2">
	        <?php /* <div class="middle-hd">
	            <h1 class="ms-title" style="text-align: center;">NEWS</h1> 
	        </div> */ ?>
	        <div class="b-vacancy-page">
	            <ul class="b-newslist">
					<?php 
				        $args = array( 'numberposts' => 18, 'category' => 22 );
				        $lastposts = get_posts( $args );
				        foreach($lastposts as $post) : setup_postdata($post); 
				    ?> 
					<li class="newslist__li">
					    <a class="b-news_link" href="<?php the_permalink(); ?>">
					        <time><?php the_time('j.m') ?><br><small><?php the_time('Y') ?></small></time>
					        <span class="b-h2"><?php the_title(); ?></span>
					        <span class="txt"><?php echo get_excerpt(120); ?></span>
					    </a>
					</li>
					<?php endforeach; ?>
				</ul>  
	        </div>
	    </div>
    </div>
<?php endif; ?>

<!-- RECENT EVENTS PAGE -->
<?php if (is_category('Recent Events')) : ?>
    <div class="middle">
    	<div class="middle-hd">
            <h1 class="ms-title">RECENT EVENTS</h1>
        </div>
    	<?php wp_nav_menu(array( 'sort_column' => 'menu_order', 'menu' => 'News', 'container_class' => 'l-col-1', 'container_id' => 'sidebar-about', 'menu_class' => 'b-sidenav') ); ?>
        <div class="l-col-2">
	        <?php /* <div class="middle-hd">
	            <h1 class="ms-title" style="text-align: center;">NEWS</h1> 
	        </div> */ ?>
	        <div class="b-vacancy-page">
	            <ul class="b-newslist">
					<?php 
				        $args = array( 'numberposts' => 18, 'category' => 23 );
				        $lastposts = get_posts( $args );
				        foreach($lastposts as $post) : setup_postdata($post); 
				    ?> 
					<li class="newslist__li">
					    <a class="b-news_link" href="<?php the_permalink(); ?>">
					        <time><?php the_time('j.m') ?><br><small><?php the_time('Y') ?></small></time>
					        <span class="b-h2"><?php the_title(); ?></span>
					        <span class="txt"><?php echo get_excerpt(120); ?></span>
					    </a>
					</li>
					<?php endforeach; ?>
				</ul>  
	        </div>
	    </div>
    </div>
<?php endif; ?>

<!-- PRESS RELEASES PAGE -->
<?php if (is_category('Press Releases')) : ?>
    <div class="middle">
    	<div class="middle-hd">
            <h1 class="ms-title">PRESS RELEASES</h1>
        </div>
    	<?php wp_nav_menu(array( 'sort_column' => 'menu_order', 'menu' => 'News', 'container_class' => 'l-col-1', 'container_id' => 'sidebar-about', 'menu_class' => 'b-sidenav') ); ?>
        <div class="l-col-2">
	        <?php /* <div class="middle-hd">
	            <h1 class="ms-title" style="text-align: center;">NEWS</h1> 
	        </div> */ ?>
	        <div class="b-vacancy-page">
	            <ul class="b-newslist">
					<?php 
				        $args = array( 'numberposts' => 18, 'category' => 20 );
				        $lastposts = get_posts( $args );
				        foreach($lastposts as $post) : setup_postdata($post); 
				    ?> 
					<li class="newslist__li">
					    <a class="b-news_link" href="<?php the_permalink(); ?>">
					        <time><?php the_time('j.m') ?><br><small><?php the_time('Y') ?></small></time>
					        <span class="b-h2"><?php the_title(); ?></span>
					        <span class="txt"><?php echo get_excerpt(120); ?></span>
					    </a>
					</li>
					<?php endforeach; ?>
				</ul>  
	        </div>
	    </div>
    </div>
<?php endif; ?>

<!--  CAREERS PAGE -->
<?php if (is_category('Careers')) : ?>
	<div class="middle m-middle-1">
	    <div class="b-vacancy-page">
	        <div class="l-col-2">
                <article class="for-editor big-editor">
                	<div class="b-vacancy-page-description">
	                    <?php 
							$page_id = 13; 
							$page_data = get_page( $page_id ); 
							echo '<blockquote class="clearfix">'. $page_data->post_title .'</blockquote>';// echo the title
							echo apply_filters('the_content', $page_data->post_content); // echo the content and retain Wordpress filters such as paragraph tags. Origin from: http://wordpress.org/support/topic/get_pagepost-and-no-paragraphs-problem
						?>
					</div>
                </article>
	        </div>
	        <?php include('sidebar-careers.php'); ?>
	    </div>
	</div>
<?php endif; ?>

<!--  BLOG PAGE -->
<?php if (is_category('Blog')) : ?>
<div class="middle">
    <div class="l-col-1">
		<div class="blogs-cats">
			<h3>Tags</h3>
			<?php st_tag_cloud('category=3') ?>
		</div>
	</div>
    <div class="l-col-2">
    	<h1 class="ms-title"><?php single_cat_title(); ?></h1>
        <ul class="b-blogsentries"> 
	        <?php 
                $args = array( 'numberposts' => 10, 'category' => 3 );
                $lastposts = get_posts( $args );
                foreach($lastposts as $post) : setup_postdata($post); 
            ?>
                <li class="blogsentries__li">         
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
				        <p class="blogsentries__txt"><span><a href="<?php the_permalink(); ?>"><?php echo get_excerpt(300); ?></a></span></p>
				        <p class="tags"><?php the_tags(); ?></p>
				    </article>
				</li> 
            <?php endforeach; ?>          
        </ul>   
    </div>
</div>
<?php endif; ?>

<!-- LEADERSHIP PAGE -->
<?php if (is_category('Leadership')) : ?>
    <div class="middle">
    	<!-- THIS SIDEBAR IS A WORDPRESS CUSTOM MENU CONTROLLED VIA APPEARANCE -> MENUS -->
    	<?php wp_nav_menu(array( 'sort_column' => 'menu_order', 'menu' => 'About Us', 'container_class' => 'l-col-1', 'container_id' => 'sidebar-about', 'menu_class' => 'b-sidenav') ); ?>
    	<!-- END OF SIDEBAR -->
        <div class="l-col-2">
	        <h1 class="ms-title"><?php single_cat_title(); ?> </h1>
	        <div class="b-vacancy-page">
	            <ul class="b-blogsentries"> 
			        <?php 
		                $args = array( 'numberposts' => 10, 'category' => 24 );
		                $lastposts = get_posts( $args );
		                foreach($lastposts as $post) : setup_postdata($post); 
		            ?>
		                <li class="blogsentries__li">         
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
						        <p class="blogsentries__txt"><span><a href="<?php the_permalink(); ?>"><?php echo get_excerpt(300); ?></a></span></p>
						        <p class="tags"><?php the_tags(); ?></p>
						    </article>
						</li> 
		            <?php endforeach; ?>          
		        </ul>   
	        </div>
	    </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>